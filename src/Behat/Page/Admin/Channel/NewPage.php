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
     * @param string $name
     * @return string
     */
    public function getMessage($name)
    {
        $xpath = sprintf('//input[@name="channel[%s]"]/following-sibling::ul[@class="help-block"]//li', $name);

        return $this->getSession()->getPage()->find('xpath', $xpath)->getText();
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl(array $params)
    {
        return '/admin/channel/new';
    }
}
