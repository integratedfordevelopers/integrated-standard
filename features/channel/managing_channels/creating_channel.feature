@channel
Feature: Creating channels
  In order to manage my channels
  As an administrator
  I want to be able to create a channel

  Background:
    Given I am logged in as an administrator

  Scenario: Creating channel
    When I create a channel
    And I name it "Behat"
    And I define its color as "#ff0000"
    And I add it
    Then I should be notified that the item is created
    And the channel named "Behat" should be in the list
