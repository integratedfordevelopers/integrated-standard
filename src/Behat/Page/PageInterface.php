<?php

/*
 * This file is part of the Integrated package.
 *
 * (c) e-Active B.V. <integrated@e-active.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Integrated\Behat\Page;

interface PageInterface
{
    /**
     * @param array $params
     * @return void
     */
    public function open(array $params);

    /**
     * @return void
     */
    public function verify();

    /**
     * @param array $params
     * @return string
     */
    public function getUrl(array $params);
}
