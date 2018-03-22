<?php

/*
 * This file is part of the Integrated package.
 *
 * (c) e-Active B.V. <integrated@e-active.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Integrated\Behat\Page\Admin\Alert;

use Behat\Mink\Exception\ElementNotFoundException;
use Behat\Mink\Session;

trait Alert
{
    /**
     * @param string $class
     * @return string
     * @throws ElementNotFoundException
     */
    public function getAlert($class = 'success')
    {
        if (!$element = $this->getSession()->getPage()->find('css', sprintf('.alert-%s', $class))) {
            throw new ElementNotFoundException($this->getSession()->getDriver(), 'Alert');
        }

        return $element->getText();
    }

    /**
     * @return Session
     */
    abstract protected function getSession();
}
