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
use Integrated\Behat\Page\Admin\Channel\DeletePage;
use Integrated\Behat\Page\Admin\Channel\EditPage;
use Integrated\Behat\Page\Admin\Channel\IndexPage;
use Integrated\Behat\Page\Admin\Channel\NewPage;
use Integrated\Behat\Page\Admin\Channel\ShowPage;
use PHPUnit\Framework\Assert;

class ManagingChannelContext implements Context
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
     * @var NewPage
     */
    private $newPage;

    /**
     * @var EditPage
     */
    private $editPage;

    /**
     * @var DeletePage
     */
    private $deletePage;

    /**
     * @param IndexPage  $indexPage
     * @param ShowPage   $showPage
     * @param NewPage    $newPage
     * @param EditPage   $editPage
     * @param DeletePage $deletePage
     */
    public function __construct(IndexPage $indexPage, ShowPage $showPage, NewPage $newPage, EditPage $editPage, DeletePage $deletePage)
    {
        $this->indexPage = $indexPage;
        $this->showPage = $showPage;
        $this->newPage = $newPage;
        $this->editPage = $editPage;
        $this->deletePage = $deletePage;
    }

    /**
     * @When I view the channels
     */
    public function iViewTheChannels()
    {
        $this->indexPage->open();
    }

    /**
     * @When I create a channel
     * @When I try to create a channel
     */
    public function iCreateAChannel()
    {
        $this->newPage->open();
    }

    /**
     * @When I name it :name
     * @param string $name
     * @throws ElementNotFoundException
     */
    public function iNameIt($name)
    {
        $this->newPage->name($name);
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
     * @When I define its color as :color
     * @param string $name
     * @throws ElementNotFoundException
     */
    public function iDefineItsColorAs($color)
    {
        $this->newPage->color($color);
    }

    /**
     * @When I add it
     * @throws ElementNotFoundException
     */
    public function iAddIt()
    {
        $this->newPage->save();
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
     * @When I delete channel :id
     */
    public function iDeleteChannel($id)
    {
        $this->deletePage->open(['id' => $id]);
        $this->deletePage->delete();
    }

    /**
     * @When I edit channel :id
     */
    public function iEditChannel($id)
    {
        $this->editPage->open(['id' => $id]);
    }

    /**
     * @Then I should see :number channels in the list
     * @param int $number
     */
    public function iShouldSeeChannelsInTheList($number)
    {
        Assert::assertCount((int) $number, $this->indexPage->getChannels());
    }

    /**
     * @Then the channel named :name should be in the list
     * @param string $name
     */
    public function theChannelNamedShouldBeInTheList($name)
    {
        Assert::assertContains($name, $this->indexPage->getChannels());
    }

    /**
     * @Then I should be notified that the item is created
     * @throws ElementNotFoundException
     */
    public function iShouldBeNotifiedThatTheItemIsCreated()
    {
        Assert::assertContains('Item created', $this->showPage->getAlert());
    }

    /**
     * @Then the channel named :name should be deleted
     * @param string $name
     */
    public function theChannelNamedShouldBeDeleted($name)
    {
        Assert::assertNotContains($name, $this->indexPage->getChannels());
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
        Assert::assertContains('Channel deleted', $this->indexPage->getAlert());
    }

    /**
     * @Then I should see a required error for the :name field
     * @throws ElementNotFoundException
     */
    public function iShouldSeeARequiredErrorForTheField($name)
    {
        Assert::assertSame('This value should not be blank.', $this->newPage->getMessage($name));
    }
}
