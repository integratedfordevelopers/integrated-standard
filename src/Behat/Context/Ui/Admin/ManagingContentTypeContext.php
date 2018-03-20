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
use Behat\Mink\Exception\ElementNotFoundException;
use Integrated\Behat\Page\Admin\ContentType\IndexPage;
use Integrated\Behat\Page\Admin\ContentType\ShowPage;
use Integrated\Behat\Page\Admin\ContentType\EditPage;
use PHPUnit\Framework\Assert;

class ManagingContentTypeContext implements Context
{
    /**
     * @var IndexPage
     */
    private $indexPage;

    /**
     * @var ShowPage
     */
    private $showPage;

    /**
     * @var EditPage
     */
    private $editPage;

    /**
     * @param IndexPage $indexPage
     * @param ShowPage $showPage
     * @param EditPage $editPage
     */
    public function __construct(IndexPage $indexPage, ShowPage $showPage, EditPage $editPage)
    {
        $this->indexPage = $indexPage;
        $this->showPage = $showPage;
        $this->editPage = $editPage;
    }

    /**
     * @When I view the content types
     */
    public function iWantToViewContentTypes()
    {
        $this->indexPage->open();
    }

    /**
     * @When I view content type :name
     * @param string $name
     */
    public function iWantToViewContentType($name)
    {
        $this->showPage->open(['name' => $name]);
    }

    /**
     * @When I edit content type :name
     * @param string $name
     */
    public function iWantToEditContentType($name)
    {
        $this->editPage->open(['name' => $name]);
    }

    /**
     * @When I delete content type :type
     * @When I try to delete content type :name
     * @param string $name
     * @throws ElementNotFoundException
     */
    public function iWantToDeleteContentType($name)
    {
        $this->showPage->open(['name' => $name]);
        $this->showPage->delete();
    }

    /**
     * @When I rename it to :name
     * @param string $name
     * @throws ElementNotFoundException
     */
    public function iRenameItTo($name)
    {
        $this->editPage->rename($name);
    }

    /**
     * @When I select the field :field as optional
     * @param string $field
     * @throws ElementNotFoundException
     */
    public function iSelectTheFieldAsOptional($field)
    {
        $this->editPage->enableField($field);
    }

    /**
     * @When I select the field :field as required
     * @param string $field
     * @throws ElementNotFoundException
     */
    public function iSelectTheFieldAsRequired($field)
    {
        $this->editPage->enableField($field, true);
    }

    /**
     * @When I save my changes
     * @throws ElementNotFoundException
     */
    public function iSaveMyChanges()
    {
        $this->editPage->save();
    }

    /**
     * @Then I should see :number content types in the list
     * @param int $number
     */
    public function iShouldSeeContentTypesInTheList($number)
    {
        Assert::assertCount((int) $number, $this->indexPage->getContentTypes());
    }

    /**
     * @Then the content type named :name should be in the list
     * @param string $name
     */
    public function theContentTypeNamedShouldBeInTheList($name)
    {
        Assert::assertContains($name, $this->indexPage->getContentTypes());
    }

    /**
     * @Then the content type named :name should be deleted
     * @param string $name
     */
    public function theContentTypeNamedShouldBeDeleted($name)
    {
        Assert::assertNotContains($name, $this->indexPage->getContentTypes());
    }

    /**
     * @Then I should see the name :name
     * @param string $name
     * @throws ElementNotFoundException
     */
    public function iShouldSeeTheName($name)
    {
        Assert::assertSame($name, $this->showPage->getName());
    }

    /**
     * @Then I should see the required field :field
     * @Then the content type should have a required field :field
     * @param string $field
     * @throws ElementNotFoundException
     */
    public function iShouldSeeTheRequiredField($field)
    {
        Assert::assertTrue($this->showPage->isFieldRequired($field));
    }

    /**
     * @Then I should see the optional field :field
     * @Then the content type should have an optional field :field
     * @param string $field
     * @throws ElementNotFoundException
     */
    public function iShouldSeeTheOptionalField($field)
    {
        Assert::assertFalse($this->showPage->isFieldRequired($field));
    }

    /**
     * @Then I should be notified that the item is updated
     * @throws ElementNotFoundException
     */
    public function iShouldBeNotifiedThatTheItemIsUpdated()
    {
        Assert::assertContains('Item updated', $this->showPage->getAlert());
    }

    /**
     * @Then I should be notified that the item is deleted
     * @throws ElementNotFoundException
     */
    public function iShouldBeNotifiedThatTheItemIsDeleted()
    {
        Assert::assertContains('Item deleted', $this->indexPage->getAlert());
    }

    /**
     * @Then I should be notified that the content type is in not empty and can not be deleted
     * @throws ElementNotFoundException
     */
    public function iShouldBeNotifiedThatTheContentTypeIsInNotEmptyAndCanNotBeDeleted()
    {
        Assert::assertContains('Unable te delete, ContentType is not empty', $this->indexPage->getAlert('danger'));
    }

    /**
     * @Then the content type named :name should still exist
     * @param string $name
     */
    public function theContentTypeShouldStillExist($name)
    {
        $this->iWantToViewContentTypes();
        $this->theContentTypeNamedShouldBeInTheList($name);
    }
}
