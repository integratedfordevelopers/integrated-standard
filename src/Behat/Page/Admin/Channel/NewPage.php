<?php

/*
 * This file is part of the Integrated package.
 *
 * (c) e-Active B.V. <integrated@e-active.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Integrated\Behat\Page\Admin\Channel;

use Behat\Mink\Exception\ElementNotFoundException;
use Integrated\Behat\Page\Page;

class NewPage extends Page
{
    /**
     * @param string $name
     * @throws ElementNotFoundException
     */
    public function name($name)
    {
        $this->getSession()->getPage()->fillField('channel[name]', $name);
    }

    /**
     * @param string $color
     * @throws ElementNotFoundException
     */
    public function color($color)
    {
        $this->getSession()->getPage()->fillField('channel[color]', $color);
    }

    /**
     * @throws ElementNotFoundException
     */
    public function save()
    {
        $this->getSession()->getPage()->pressButton('Save');
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->getSession()->getPage()->find('xpath', '//ul[@class="help-block"]//li')->getText();
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl(array $params)
    {
        return '/admin/channel/new';
    }
}
