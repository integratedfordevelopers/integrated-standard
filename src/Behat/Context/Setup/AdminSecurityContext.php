<?php

/*
 * This file is part of the Integrated package.
 *
 * (c) e-Active B.V. <integrated@e-active.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Integrated\Behat\Context\Setup;

use Behat\Behat\Context\Context;
use Behat\Mink\Driver\BrowserKitDriver;
use Behat\Mink\Exception\UnsupportedDriverActionException;
use Behat\Mink\Session;
use Integrated\Bundle\UserBundle\Model\RoleManagerInterface;
use Integrated\Bundle\UserBundle\Model\UserInterface;
use Integrated\Bundle\UserBundle\Model\UserManagerInterface;
use Symfony\Component\BrowserKit\Cookie;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;

class AdminSecurityContext implements Context
{
    /**
     * @var Session
     */
    private $session;

    /**
     * @var UserManagerInterface
     */
    private $userManager;

    /**
     * @var RoleManagerInterface
     */
    private $roleManager;

    /**
     * @var EncoderFactoryInterface
     */
    private $encoderFactory;

    /**
     * @param Session $session
     * @param UserManagerInterface $userManager
     * @param RoleManagerInterface $roleManager
     * @param EncoderFactoryInterface $encoderFactory
     */
    public function __construct(
        Session $session,
        UserManagerInterface $userManager,
        RoleManagerInterface $roleManager,
        EncoderFactoryInterface $encoderFactory
    ) {
        $this->session = $session;
        $this->userManager = $userManager;
        $this->roleManager = $roleManager;
        $this->encoderFactory = $encoderFactory;
    }

    /**
     * @Given I am logged in as an administrator
     * @throws UnsupportedDriverActionException
     */
    public function iAmLoggedInAsAnAdministrator()
    {
        $this->userManager->persist($user = $this->createAdminUser());

        $token = new UsernamePasswordToken($user, $user->getPassword(), 'randomstringbutnotnull', $user->getRoles());

        $driver = $this->session->getDriver();
        if (!$driver instanceof BrowserKitDriver) {
            throw new UnsupportedDriverActionException(
                'This step is only supported by the BrowserKitDriver (given: $s)',
                $driver
            );
        }

        /** @var \Symfony\Bundle\FrameworkBundle\Client $client */
        $client = $driver->getClient();
        $client->getCookieJar()->set(new Cookie(session_name(), true));

        $session = $client->getContainer()->get('session');

        $session->set(sprintf('_security_%s', 'default'), serialize($token));
        $session->save();

        $cookie = new Cookie($session->getName(), $session->getId());
        $client->getCookieJar()->set($cookie);
    }

    /**
     * @return UserInterface
     */
    private function createAdminUser()
    {
        $user = $this->userManager->create();

        $user->setUsername('integrated');
        $user->setEmail('integrated2@example.com');
        $user->setSalt(base64_encode(random_bytes(72)));
        $user->setPassword($this->encoderFactory->getEncoder($user)->encodePassword('integrated', $user->getSalt()));
        $user->addRole($this->getAdminRole());

        return $user;
    }

    /**
     * @return \Integrated\Bundle\UserBundle\Model\RoleInterface
     */
    private function getAdminRole()
    {
        $this->roleManager->persist($role = $this->roleManager->create('ROLE_ADMIN'));
        return $role;
    }
}
