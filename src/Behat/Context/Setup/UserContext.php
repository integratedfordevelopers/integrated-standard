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
use Doctrine\ORM\EntityManager;
use Exception;
use Integrated\Bundle\UserBundle\Model\RoleManagerInterface;
use Integrated\Bundle\UserBundle\Model\ScopeManagerInterface;
use Integrated\Bundle\UserBundle\Model\UserManagerInterface;
use Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactoryInterface;
use Symfony\Component\Security\Core\Exception\UserNotFoundException;

class UserContext implements Context
{
    /**
     * @var SecurityContext
     */
    private $securityContext;

    /**
     * @var EntityManager
     */
    private $userManager;

    /**
     * @var ScopeManagerInterface
     */
    private $scopeManager;

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
     * @param ScopeManagerInterface $scopeManager
     * @param RoleManagerInterface $roleManager
     * @param PasswordHasherFactoryInterface $hasherFactory
     */
    public function __construct(
        SecurityContext $securityContext,
        UserManagerInterface $userManager,
        ScopeManagerInterface $scopeManager,
        RoleManagerInterface $roleManager,
        PasswordHasherFactoryInterface $hasherFactory
    ) {
        $this->securityContext = $securityContext;
        $this->userManager = $userManager;
        $this->scopeManager = $scopeManager;
        $this->roleManager = $roleManager;
        $this->hasherFactory = $hasherFactory;
    }

    /**
     * @Given there is a user :email identified by :password in the Integrated scope
     * @param string $email
     * @param string $password
     * @throws Exception
     */
    public function createUserWithIntegratedScope($email, $password)
    {
        $user = $this->userManager->create();
        $user->setUsername($email);
        $user->setEmail($email);
        $user->setPassword($this->hasherFactory->getPasswordHasher($user)->hash($password));
        $user->addRole($this->getRole('ROLE_SCOPE_INTEGRATED'));
        $user->setGoogleAuthenticatorSecret('secret');
        $user->setGoogleAuthenticatorEnabled(true);
        $user->setScope($this->getScope('Integrated'));

        $this->userManager->persist($user);
    }

    /**
     * @Given I am logged in as :email
     * @param string $email
     * @throws \Behat\Mink\Exception\UnsupportedDriverActionException
     */
    public function iAmLoggedInAs($email)
    {
        if (!$user = $this->userManager->findByEmail($email)) {
            throw new UserNotFoundException(sprintf('No user found with e-mail "%s"', $email));
        }

        $this->securityContext->login($user);
    }

    /**
     * @param string $name
     * @return \Integrated\Bundle\UserBundle\Model\ScopeInterface
     */
    private function getScope($name)
    {
        $scope = $this->scopeManager->create();
        $scope->setName($name);
        $scope->setAdmin(true);

        $this->scopeManager->persist($scope);

        return $scope;
    }

    /**
     * @param $id
     * @return \Integrated\Bundle\UserBundle\Model\RoleInterface
     */
    private function getRole($id)
    {
        $this->roleManager->persist($role = $this->roleManager->create($id));
        return $role;
    }
}
