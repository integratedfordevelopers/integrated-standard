<?php

/*
 * This file is part of the Integrated package.
 *
 * (c) e-Active B.V. <integrated@e-active.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Integrated\Behat\Context\Ui\Admin;

use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Mink\Session;
use PHPUnit\Framework\Assert;

class ManagingContentTypeContext implements Context
{
    /**
     * @var Session
     */
    private $session;

    /**
     * @param Session $session
     */
    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    /**
     * @When I want to view content types
     */
    public function iWantToViewContentTypes()
    {
        $this->session->visit('/admin/contenttype');
    }

    /**
     * @Then I should see :number content types in the list
     */
    public function iShouldSeeContentTypesInTheList($number)
    {
        Assert::assertCount((int) $number, $this->session->getPage()->findAll('css', '.table tbody tr'));
    }

    /**
     * @Then the content type :type should be in the list
     */
    public function theContentTypeShouldBeInTheList($type)
    {
        throw new PendingException();
    }
}
