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
use Integrated\Behat\Page\Admin\Connector\IndexPage;
use Integrated\Behat\Page\Admin\Connector\CreatePage;
use Integrated\Behat\Page\Admin\Connector\EditPage;
use Integrated\Behat\Page\Admin\Connector\DeletePage;
use PHPUnit\Framework\Assert;

class ManagingConnectorContext implements Context
{
    /**
     * @var IndexPage
     */
    private $indexPage;

    /**
     * @var CreatePage
     */
    private $createPage;

    /**
     * @var EditPage
     */
    private $editPage;

    /**
     * @var DeletePage
     */
    private $deletePage;

    /**
     * @param IndexPage $indexPage
     * @param CreatePage $createPage
     * @param EditPage $editPage
     * @param DeletePage $deletePage
     */
    public function __construct(IndexPage $indexPage, CreatePage $createPage, EditPage $editPage, DeletePage $deletePage)
    {
        $this->indexPage = $indexPage;
        $this->createPage = $createPage;
        $this->editPage = $editPage;
        $this->deletePage = $deletePage;
    }

    /**
     * @When I view the connectors
     */
    public function iViewConnectors()
    {
        $this->indexPage->open();
    }

    /**
     * @Then I should see :number connectors in the list
     * @param int $number
     */
    public function iShouldSeeConnectorInTheList($number)
    {
        Assert::assertCount((int) $number, $this->indexPage->getConnectors());
    }

    /**
     * @Then the connector named :name should be in the list
     * @param string $name
     */
    public function theConnectorNamedShouldBeInTheList($name)
    {
        Assert::assertContains($name, $this->indexPage->getConnectors());
    }

    /**
     * @Then the connector named :name should be deleted
     * @param string $name
     */
    public function theConnectorNamedShouldBeDeleted($name)
    {
        Assert::assertNotContains($name, $this->indexPage->getConnectors());
    }

    /**
     * @Then I should be notified that the item :field is deleted
     * @param string $name
     * @throws ElementNotFoundException
     */
    public function iShouldBeNotifiedThatTheItemIsDeleted($name)
    {
        Assert::assertContains(
            sprintf(
                'The config %s is removed',
                $name
            ),
            $this->indexPage->getAlert()
        );
    }

    /**
     * @When I create a connector
     * @When I try to create a connector
     * @throws ElementNotFoundException
     */
    public function iCreateAConnector()
    {
        $this->createPage->open();
    }

    /**
     * @When I add it
     * @throws ElementNotFoundException
     */
    public function iAddIt()
    {
        $this->createPage->add();
    }

    /**
     * @When I name it :name
     * @param string $name
     * @throws ElementNotFoundException
     */
    public function iNameIt($name)
    {
        $this->createPage->name($name);
    }

    /**
     * @Then I should see a required field error
     * @throws ElementNotFoundException
     */
    public function iShouldSeeARequiredFieldError()
    {
        Assert::assertSame("This value should not be blank.", $this->createPage->getMessage());
    }

    /**
     * @Then I should be notified that the connector :name is created
     * @param string $name
     * @throws ElementNotFoundException
     */
    public function iShouldBeNotifiedThatTheConnectorIsCreated($name)
    {
        Assert::assertContains(
            sprintf(
                'The config %s is saved',
                $name
            ),
            $this->createPage->getAlert()
        );
    }

    /**
     * @When I edit connector :name
     * @When I try to edit connector :name
     * @param string $name
     */
    public function iWantToEditConnector($name)
    {
        $this->editPage->open(['name' => $name]);
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
     * @When I save my changes
     * @throws ElementNotFoundException
     */
    public function iSaveMyChanges()
    {
        $this->editPage->save();
    }

    /**
     * @Then I should be notified that the item is updated
     * @Then I should be notified that the changes to connector :name are saved
     * @throws ElementNotFoundException
     */
    public function iShouldBeNotifiedThatTheItemIsUpdated($name)
    {
        Assert::assertContains(
            sprintf(
                'The changes to the config %s are saved',
                $name
            ),
            $this->editPage->getAlert()
        );
    }

    /**
     * @When I delete connector :name
     * @param string $name
     * @throws ElementNotFoundException
     */
    public function iWantToDeleteConnector($name)
    {
        $this->deletePage->open(['name' => $name]);
        $this->deletePage->delete();
    }

    /**
     * @Then the connector named :name should still exist
     * @param string $name
     */
    public function theConnectorShouldStillExist($name)
    {
        $this->iWantToViewConnectors();
        $this->theConnectorNamedShouldBeInTheList($name);
    }
}
