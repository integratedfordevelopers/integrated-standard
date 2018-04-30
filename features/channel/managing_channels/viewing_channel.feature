@channel
Feature: Viewing channels
  In order to manage my channels
  As an administrator
  I want to be able to view channels

  Background:
    Given I am logged in as an administrator
    And there is a channel "Test" with the domains "test.com,www.example.com" and the color "#ff0000"

  Scenario: Viewing channels
    When I view the channels
    Then I should see "1" channels in the list
    And the channel named "Test" should be in the list