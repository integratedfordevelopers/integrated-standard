<?php

/*
 * This file is part of the Integrated package.
 *
 * (c) e-Active B.V. <integrated@e-active.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Behat\Behat\Context\Context;
use Behat\Mink\Driver\BrowserKitDriver;
use Behat\Mink\Exception\ExpectationException;
use Behat\Mink\Exception\UnsupportedDriverActionException;
use Behat\MinkExtension\Context\MinkContext;

use Symfony\Component\BrowserKit\Cookie;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;

/**
 * @author Johnny Borg <johnny@e-active.nl>
 */
class FeatureContext extends MinkContext implements Context
{
    /**
     * @Given /^I am authenticated as "([^"]*)"$/
     * @param string $username
     * @throws UnsupportedDriverActionException
     * @throws \Symfony\Component\Security\Core\Exception\UsernameNotFoundException
     */
    public function iAmAuthenticatedAs($username)
    {
        $driver = $this->getSession()->getDriver();
        if (!$driver instanceof BrowserKitDriver) {
            throw new UnsupportedDriverActionException(
                'This step is only supported by the BrowserKitDriver (given: $s)',
                $driver
            );
        }

        /** @var \Symfony\Bundle\FrameworkBundle\Client $client */
        $client = $driver->getClient();
        $client->getCookieJar()->set(new Cookie(session_name(), true));

        if ($user = $client->getContainer()->get('integrated_user.user.manager')->findByUsername($username)) {

            $session = $client->getContainer()->get('session');

            $token = new UsernamePasswordToken($user, null, 'default', $user->getRoles());
            $session->set('_security_default', serialize($token));
            $session->save();

            $cookie = new Cookie($session->getName(), $session->getId());
            $client->getCookieJar()->set($cookie);
        } else {
            throw new UsernameNotFoundException(
                sprintf('The requested user %s is not found', $username)
            );
        }
    }

    /**
     * @Given /^I am going to create a "([^"]*)"$/
     * @param string $name
     * @throws \Behat\Mink\Exception\ExpectationException
     */
    public function createNewContent($name)
    {
        $this->getSession()->visit('/admin/content');
        $contentTypes = $this->getSession()->getPage()->findAll('xpath', '//div[@class="megamenu-content"]//li');

        if (count($contentTypes)) {
            // Put the content type here
            $_element = null;

            // Iterate the content types in the list
            foreach ($contentTypes as $element) {
                /** @var Behat\Mink\Element\NodeElement $element */
                if (false !== strpos($element->getText(), $name)) {
                    $_element = $element;
                }
            }

            if (null === $_element) {
                throw new ExpectationException(
                    sprintf('Content type %s not found under "Create new". do you have the correct rights?', $name),
                    $this->getSession()->getDriver()
                );
            }

            $_element->clickLink($name);
        } else {
            // No navigation found
            throw new ExpectationException(
                'No content items found under "Create new", are you sure you are loggedin?',
                $this->getSession()->getDriver()
            );
        }
    }
}
