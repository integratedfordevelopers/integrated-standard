@connector
Feature: Creating connector
  In order to manage my connectors
  As an administrator
  I want to be able to create a connector

  Background:
    Given I am logged in as an administrator

  Scenario: Create a connector
    When I create a connector
    And I name it "New connector"
    And I add it
    Then I should be notified that the connector "New connector" is created
    And the connector named "New connector" should be in the list
