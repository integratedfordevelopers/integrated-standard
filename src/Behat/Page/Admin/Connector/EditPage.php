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
use Integrated\Behat\Page\Exception\MissingParamException;
use Integrated\Behat\Page\Page;

class EditPage extends Page
{
    use Alert;

    /**
     * @param string $name
     * @throws ElementNotFoundException
     */
    public function rename($name)
    {
        $this->getSession()->getPage()->fillField('integrated_channel_config[name]', $name);
    }

    /**
     * @throws ElementNotFoundException
     */
    public function save()
    {
        $this->getSession()->getPage()->pressButton('Save');
    }

    /**
     * @param array $params
     * @throws ElementNotFoundException
     * @throws MissingParamException
     */
    public function open(array $params = [])
    {
        if (!isset($params['name'])) {
            throw new MissingParamException('No param name provided');
        }

        parent::open();

        $locator = sprintf('//table/tbody/tr/td[contains(text(), "%s")]/..//td[3]/a[1]', $params['name']);
        foreach ($this->getSession()->getPage()->findAll('xpath', $locator) as $element) {
            $element->click();
            return;
        }

        throw new ElementNotFoundException($this->getSession()->getDriver(), 'xpath', null, $locator);
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl(array $params)
    {
        return '/admin/connector/config/';
    }
}
