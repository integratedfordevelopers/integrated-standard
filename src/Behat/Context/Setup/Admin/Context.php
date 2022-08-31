<?php

/*
 * This file is part of the Integrated package.
 *
 * (c) e-Active B.V. <integrated@e-active.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Integrated\Behat\Context\Setup\Admin;

use Behat\Behat\Context\Context as ContextInterface;
use Behat\Mink\Exception\UnsupportedDriverActionException;
use Integrated\Bundle\UserBundle\Model\RoleManagerInterface;
use Integrated\Bundle\UserBundle\Model\UserInterface;
use Integrated\Bundle\UserBundle\Model\UserManagerInterface;
use \Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactoryInterface;

class Context implements ContextInterface
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
     * @var PasswordHasherFactoryInterface
     */
    private $hasherFactory;

    /**
     * @param SecurityContext $securityContext
     * @param UserManagerInterface $userManager
     * @param RoleManagerInterface $roleManager
     * @param PasswordHasherFactoryInterface $hasherFactory
     */
    public function __construct(
        SecurityContext $securityContext,
        UserManagerInterface $userManager,
        RoleManagerInterface $roleManager,
        PasswordHasherFactoryInterface $hasherFactory
    ) {
        $this->securityContext = $securityContext;
        $this->userManager = $userManager;
        $this->roleManager = $roleManager;
        $this->hasherFactory = $hasherFactory;
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
        $user->setPassword($this->hasherFactory->getPasswordHasher($user)->hash('integrated'));
        $user->setGoogleAuthenticatorSecret('secret');
        $user->setGoogleAuthenticatorEnabled(true);

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
