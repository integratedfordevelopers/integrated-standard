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
use Integrated\Bundle\UserBundle\Model\UserInterface;
use Symfony\Component\BrowserKit\Cookie;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class SecurityContext implements Context
{
    /**
     * @var Session
     */
    private $session;

    /**
     * @param Session $session
     */
    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    /**
     * @param UserInterface $user
     * @throws UnsupportedDriverActionException
     */
    public function login(UserInterface $user)
    {
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
}
