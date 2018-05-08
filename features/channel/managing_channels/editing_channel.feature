@channel
Feature: Editing channels
  In order to manage my channels
  As an administrator
  I want to be able to edit a channel

  Background:
    Given I am logged in as an administrator
    And there is a channel "test" named "Test" with the domains "test.com,www.example.com" and the color "#ff0000"

  Scenario: Editing channel
    When I edit channel "test"
