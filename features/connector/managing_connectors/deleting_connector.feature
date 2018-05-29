@connector
Feature: Deleting connector
  In order to manage my connectors
  As an administrator
  I want to be able to delete a connector

  Background:
    Given I am logged in as an administrator
    And there is a connector "website" named "Website"

  Scenario: Delete connector
    When I delete connector "website"
    Then I should be notified that the item "Website" is deleted
    And the connector named "Website" should be deleted
