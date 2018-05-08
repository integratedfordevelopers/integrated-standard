@channel
Feature: Deleting channels
  In order to manage my channels
  As an administrator
  I want to be able to delete a channel

  Background:
    Given I am logged in as an administrator
    And there is a channel "test" named "Test" with the domains "test.com,www.example.com" and the color "#ff0000"

  Scenario: Deleting channel
    When I delete channel "test"
