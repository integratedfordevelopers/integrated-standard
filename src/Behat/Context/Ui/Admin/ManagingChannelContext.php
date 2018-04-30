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
use Integrated\Behat\Page\Admin\Channel\IndexPage;
use PHPUnit\Framework\Assert;

class ManagingChannelContext implements Context
{
    /**
     * @var IndexPage
     */
    private $indexPage;

    /**
     * @param IndexPage $indexPage
     */
    public function __construct(IndexPage $indexPage)
    {
        $this->indexPage = $indexPage;
    }

    /**
     * @When I view the channels
     */
    public function iWantToViewChannels()
    {
        $this->indexPage->open();
    }

    /**
     * @Then I should see :number channels in the list
     * @param int $number
     */
    public function iShouldSeeChannelsInTheList($number)
    {
        var_dump($this->indexPage->getChannels());
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
     * @Then the channel named :name should be deleted
     * @param string $name
     */
    public function theChannelNamedShouldBeDeleted($name)
    {
        Assert::assertNotContains($name, $this->indexPage->getChannels());
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
     * @Then I should be notified that the channel is in not empty and can not be deleted
     * @throws ElementNotFoundException
     */
    public function iShouldBeNotifiedThatTheChannelIsInNotEmptyAndCanNotBeDeleted()
    {
        Assert::assertContains('Unable te delete, Channel is not empty', $this->indexPage->getAlert('danger'));
    }

    /**
     * @Then the channel named :name should still exist
     * @param string $name
     */
    public function theChannelShouldStillExist($name)
    {
        $this->iWantToViewChannels();
        $this->theChannelNamedShouldBeInTheList($name);
    }
}
