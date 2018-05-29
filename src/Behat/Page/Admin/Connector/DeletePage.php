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

class DeletePage extends Page
{
    use Alert;

    /**
     * @throws ElementNotFoundException
     */
    public function delete()
    {
        $this->getSession()->getPage()->pressButton('form.actions.delete');
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl(array $params)
    {
        if (!isset($params['name'])) {
            throw new MissingParamException('No param name provided');
        }

        return sprintf('/admin/connector/config/%s/delete', $params['name']);
    }
}
