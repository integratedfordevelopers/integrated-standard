<?php

/*
 * This file is part of the Integrated package.
 *
 * (c) e-Active B.V. <integrated@e-active.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Integrated\Behat\Page\Admin\ContentType;

use Behat\Mink\Element\NodeElement;
use Behat\Mink\Exception\ElementNotFoundException;
use Integrated\Behat\Page\Admin\Alert\Alert;
use Integrated\Behat\Page\Exception\MissingParamException;
use Integrated\Behat\Page\Page;

class ShowPage extends Page
{
    use Alert;

    /**
     * @return string
     * @throws ElementNotFoundException
     */
    public function getName()
    {
        if (!$element = $this->getSession()->getPage()->find('xpath', '//dt[contains(., "Name")]/following::dd')) {
            throw new ElementNotFoundException($this->getSession()->getDriver(), 'Name');
        }

        return $element->getText();
    }

    /**
     * @param string $field
     * @return NodeElement
     * @throws ElementNotFoundException
     */
    public function getField($field)
    {
        foreach ($this->getFields() as $element) {
            if ($td = $element->find('css', 'td:first-child')) {
                if ($td->getText() === $field) {
                    return $element;
                }
            }
        }

        throw new ElementNotFoundException($this->getSession()->getDriver(), 'Field');
    }

    /**
     * @param string $field
     * @return bool
     * @throws ElementNotFoundException
     */
    public function isFieldRequired($field)
    {
        if (!$td = $this->getField($field)->find('css', 'td:last-child')) {
            throw new ElementNotFoundException($this->getSession()->getDriver(), 'Optional/Required');
        }

        return $td->getText() === 'Yes';
    }

    /**
     * @return NodeElement[]
     */
    public function getFields()
    {
        return $this->getSession()->getPage()->findAll(
            'xpath',
            '//dt[contains(., "Fields")]/following::dd/table/tbody/tr'
        );
    }

    /**
     * @throws ElementNotFoundException
     */
    public function delete()
    {
        $this->getSession()->getPage()->pressButton('Delete');
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl(array $params)
    {
        if (!isset($params['name'])) {
            throw new MissingParamException('No param name provided');
        }

        return sprintf('/admin/contenttype/%s/show', $params['name']);
    }
}
