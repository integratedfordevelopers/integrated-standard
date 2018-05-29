@connector
Feature: Viewing connectors
  In order to manage my connectors
  As an administrator
  I want to be able to view connectors

  Background:
    Given I am logged in as an administrator
    And there is a connector "website" named "Website"
    And there is a connector "twitter" named "Twitter"

  Scenario: Viewing connectors
    When I view the connectors
    Then I should see "2" connectors in the list
    And the connector named "Website" should be in the list
    And the connector named "Twitter" should be in the list
