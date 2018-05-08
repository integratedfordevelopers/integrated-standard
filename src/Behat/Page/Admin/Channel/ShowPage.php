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

use Integrated\Behat\Page\Exception\MissingParamException;
use Integrated\Behat\Page\Page;

class ShowPage extends Page
{
    /**
     * {@inheritdoc}
     */
    public function getUrl(array $params)
    {
        if (!isset($params['id'])) {
            throw new MissingParamException('No param id provided');
        }

        return sprintf('/admin/channel/%s', $params['id']);
    }
}
