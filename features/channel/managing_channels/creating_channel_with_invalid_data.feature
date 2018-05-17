@channel
Feature: Creating channels
  In order to manage my channels
  As an administrator
  I want to be able to create a channel

  Background:
    Given I am logged in as an administrator

  Scenario: Creating channel
    When I create a channel
    And I add it
    Then I should see an required field error
    And I should see "0" channels in the list
