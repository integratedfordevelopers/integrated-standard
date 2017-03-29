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
use Behat\MinkExtension\Context\MinkContext;

use Integrated\Behat\Extensions\Login\SymfonyLogin;
use Integrated\Behat\Extensions\Integrated\NavigationIntegrated;
use Integrated\Behat\Extensions\Integrated\OverviewIntegrated;

/**
 * @author Johnny Borg <johnny@e-active.nl>
 */
class FeatureContext extends MinkContext implements Context
{
    use SymfonyLogin;
    use NavigationIntegrated;
    use OverviewIntegrated;
}
