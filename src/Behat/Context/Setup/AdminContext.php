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
use Behat\Mink\Exception\UnsupportedDriverActionException;
use Behat\Mink\Session;
use Integrated\Bundle\UserBundle\Model\RoleManagerInterface;
use Integrated\Bundle\UserBundle\Model\UserInterface;
use Integrated\Bundle\UserBundle\Model\UserManagerInterface;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;

class AdminContext implements Context
{
    /**
     * @var SecurityContext
     */
    private $securityContext;

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
        SecurityContext $securityContext,
        UserManagerInterface $userManager,
        RoleManagerInterface $roleManager,
        EncoderFactoryInterface $encoderFactory
    ) {
        $this->securityContext = $securityContext;
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
        $this->securityContext->login($user);
    }

    /**
     * @return UserInterface
     */
    private function createAdminUser()
    {
        $user = $this->userManager->create();

        $user->setUsername('integrated');
        $user->setEmail('integrated@example.com');
        $user->setSalt(base64_encode(random_bytes(72)));
        $user->setPassword($this->encoderFactory->getEncoder($user)->encodePassword('integrated', $user->getSalt()));

        $user->addRole($this->getRole('ROLE_ADMIN'));

        return $user;
    }

    /**
     * @param string $id
     * @return \Integrated\Bundle\UserBundle\Model\RoleInterface
     */
    private function getRole($id)
    {
        $this->roleManager->persist($role = $this->roleManager->create($id));
        return $role;
    }
}
