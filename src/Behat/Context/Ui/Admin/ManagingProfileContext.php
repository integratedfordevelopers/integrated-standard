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
use Integrated\Behat\Page\Admin\Alert\Alert;
use Integrated\Behat\Page\Admin\User\ProfilePage;
use PHPUnit\Framework\Assert;

class ManagingProfileContext implements Context
{
    /**
     * @var ProfilePage
     */
    private $profilePage;

    /**
     * @param ProfilePage $profilePage
     */
    public function __construct(ProfilePage $profilePage)
    {
        $this->profilePage = $profilePage;
    }

    /**
     * @When I want to change my password
     * @When I try to change my password
     */
    public function iWantToEditMyProfile()
    {
        $this->profilePage->open();
    }

    /**
     * @When I change password to :password
     * @param string $password
     * @throws \Behat\Mink\Exception\ElementNotFoundException
     */
    public function iChangePasswordTo($password)
    {
        $this->profilePage->password($password, $password);
    }

    /**
     * @When I change password to :password1 and repeat :password2
     * @param string $password1
     * @param string $password2
     * @throws \Behat\Mink\Exception\ElementNotFoundException
     */
    public function iChangePasswordAndRepeat($password1, $password2)
    {
        $this->profilePage->password($password1, $password2);
    }


    /**
     * @When I save my changes
     * @throws \Behat\Mink\Exception\ElementNotFoundException
     */
    public function iSaveMyChanges()
    {
        $this->profilePage->save();
    }

    /**
     * @Then I should be notified that my profile has been changed
     * @throws \Behat\Mink\Exception\ElementNotFoundException
     */
    public function iShouldBeNotifiedThatMyProfileHasBeenChanged()
    {
        Assert::assertContains('Your profile have been saved', $this->profilePage->getAlert());
    }

    /**
     * @Then I should be notified that my password is too short
     */
    public function iShouldBeNotifiedThatMyPasswordIsTooShort()
    {
        var_dump($this->profilePage->errors());
        Assert::assertContains('This value is too short. It should have 6 characters or more.', $this->profilePage->errors());
    }

    /**
     * @Then I should be notified that my password is not valid
     */
    public function iShouldBeNotifiedThatMyPasswordIsNotValid()
    {
        Assert::assertContains('This value is not valid.', $this->profilePage->errors());
    }

    /**
     * @Then I should be notified that my password is empty
     */
    public function iShouldBeNotifiedThatMyPasswordIsEmpty()
    {
        Assert::assertContains('This value should not be blank.', $this->profilePage->errors());
    }
}
