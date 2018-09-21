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

use Integrated\Bundle\UserBundle\Model\UserInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

use Integrated\Behat\Context\Setup\SecurityContext as BaseSecurityContext;

class SecurityContext extends BaseSecurityContext
{
    /**
     * @param UserInterface $user
     * @param array $roles
     * @return UsernamePasswordToken
     */
    protected function createToken(UserInterface $user, array $roles = [])
    {
        array_push($roles, 'ROLE_SCOPE_INTEGRATED');

        return parent::createToken($user, $roles);
    }
}
