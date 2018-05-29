@connector
Feature: Editing connector
  In order to manage my connectors
  As an administrator
  I want to be able to edit a connector

  Background:
    Given I am logged in as an administrator
    And there is a connector "website" named "Website"

  Scenario: Edit a connector
    When I edit connector "Website"
    And I rename it to "Edited Connector"
    And I save my changes
    Then I should be notified that the changes to connector "Edited Connector" are saved
    And the connector named "Edited Connector" should be in the list
