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
use Behat\Mink\Element\NodeElement;
use Behat\Mink\Exception\ElementNotFoundException;
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
     * @When I want to view content type :type
     * @param string $type
     */
    public function iWantToViewContentType($type)
    {
        $this->session->visit(sprintf('/admin/contenttype/%s/show', strtolower($type)));
    }

    /**
     * @Then I should see :number content types in the list
     * @param int $number
     */
    public function iShouldSeeContentTypesInTheList($number)
    {
        Assert::assertCount((int) $number, $this->session->getPage()->findAll('css', '.table tbody tr'));
    }

    /**
     * @Then the content type :type should be in the list
     * @param string $type
     */
    public function theContentTypeShouldBeInTheList($type)
    {
        $list = [];
        /** @var NodeElement $element */
        foreach ($this->session->getPage()->findAll('css', 'table tbody tr td:nth-child(2) a') as $element) {
            $list[] = $element->getText();
        }

        Assert::assertContains($type, $list);
    }

    /**
     * @Then I should see the name :name
     * @param string $name
     * @throws ElementNotFoundException
     */
    public function iShouldSeeTheName($name)
    {
        if (!$element = $this->session->getPage()->find('xpath', '//dt[contains(., "Name")]/following::dd')) {
            throw new ElementNotFoundException($this->session->getDriver(), 'dd');
        }

        Assert::assertSame($name, $element->getText());
    }

    /**
     * @Then I should see the field :arg1
     */
    public function iShouldSeeTheField($arg1)
    {
        throw new PendingException();
    }
}
