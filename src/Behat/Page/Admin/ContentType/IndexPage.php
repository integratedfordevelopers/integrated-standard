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

use Integrated\Behat\Page\Admin\Alert\Alert;
use Integrated\Behat\Page\Page;

class IndexPage extends Page
{
    use Alert;

    /**
     * @return string[]
     */
    public function getContentTypes()
    {
        $list = [];
        foreach ($this->getSession()->getPage()->findAll('css', 'table tbody tr td:nth-child(2)') as $element) {
            $list[] = $element->getText();
        }

        return $list;
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl(array $params)
    {
        return '/admin/contenttype/';
    }
}
