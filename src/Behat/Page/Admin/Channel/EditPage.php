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
        $this->getSession()->getPage()->fillField('channel[name]', $name);
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
        if (!isset($params['id'])) {
            throw new MissingParamException('No param id provided');
        }

        return sprintf('/admin/channel/%s/edit', $params['id']);
    }
}
