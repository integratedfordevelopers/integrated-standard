<?php

/*
 * This file is part of the Integrated package.
 *
 * (c) e-Active B.V. <integrated@e-active.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Integrated\Behat\Page\Admin\Connector;

use Behat\Mink\Exception\ElementNotFoundException;
use Integrated\Behat\Page\Admin\Alert\Alert;
use Integrated\Behat\Page\Page;

class CreatePage extends Page
{
    use Alert;

    /**
     * @param string $name
     * @throws ElementNotFoundException
     */
    public function name($name)
    {
        $this->getSession()->getPage()->fillField('integrated_channel_config[name]', $name);
    }

    /**
     * @throws ElementNotFoundException
     */
    public function add()
    {
        $this->getSession()->getPage()->pressButton('form.actions.create');
    }

    /**
     * @param string $name
     * @return string
     */
    public function getMessage($name)
    {
        return $this->getSession()->getPage()->find('xpath', '//input[@name="integrated_channel_config['.$name.']"]/following-sibling::ul[@class="help-block"]//li')->getText();
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl(array $params)
    {
        return '/admin/connector/config/new/website';
    }
}
