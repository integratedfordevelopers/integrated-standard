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

use Behat\Mink\Exception\ElementNotFoundException;
use Integrated\Behat\Page\Exception\MissingParamException;
use Integrated\Behat\Page\Page;

class EditPage extends Page
{
    /**
     * @param string $name
     * @throws ElementNotFoundException
     */
    public function rename($name)
    {
        $this->getSession()->getPage()->fillField('integrated_content_type[name]', $name);
    }

    /**
     * @param string $field
     * @param bool $required
     * @throws ElementNotFoundException
     */
    public function enableField($field, $required = false)
    {
        $field = trim(strtolower($field));
        $enableFieldName = sprintf('integrated_content_type[fields][default][%s][enabled]', $field);
        $requiredFieldName = sprintf('integrated_content_type[fields][default][%s][required]', $field);

        $this->getSession()->getPage()->checkField($enableFieldName);

        if ($required) {
            $this->getSession()->getPage()->checkField($requiredFieldName);
        } else {
            $this->getSession()->getPage()->uncheckField($requiredFieldName);
        }
    }

    /**
     * @throws ElementNotFoundException
     */
    public function save()
    {
        $this->getSession()->getPage()->pressButton('Save');
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl(array $params)
    {
        if (!isset($params['name'])) {
            throw new MissingParamException('No param name provided');
        }

        return sprintf('/admin/contenttype/%s', $params['name']);
    }
}
