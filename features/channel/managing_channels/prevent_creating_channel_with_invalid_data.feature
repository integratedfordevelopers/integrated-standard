@channel
Feature: Prevent creating channels with invalid data
  In order to create only valid channels
  As an administrator
  I want to be prevented from creating channels with invalid data

  Background:
    Given I am logged in as an administrator

  Scenario: Preventing from creating a channel with invalid data
    When I try to create a channel
    And I add it
    Then I should see a required error for the name field
    And I should see "0" channels in the list
