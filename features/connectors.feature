Feature: Connector
  I want to publish to another medium
  As a publisher
  I must be able to manage the connector configuration

  Scenario: See the connectors
    Given I am authenticated as "demo"
      And I am on "/admin/connector/config/"
    Then I should see "Options"
      And I should see "Name"
      And I should see "Connector"
      And I should see "Actions"
