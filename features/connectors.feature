Feature: Connector
  I want to publish to another medium
  As a publisher
  I must be able to manage the connector configuration

  Scenario: See the connectors
    Given I am authenticated as "admin" in firewall "default"
      And I am on "/admin/connector/config/"
    Then I should see "Options"
      And I should see "Name"
      And I should see "Connector"
      And I should see "Actions"

  Scenario: Add a new connector
    Given I am authenticated as "admin" in firewall "default"
      And I am on "/admin/connector/config/"
      And I follow "New website configuration"
    Then I should see "New website configuration"
      And I fill in "integrated_channel_config[name]" with "demo"
      And I check "integrated_channel_config[channels][]"
      And I press "form.actions.create"
    Then I should see "The config demo is saved"

  Scenario: Delete a connector
    Given I am authenticated as "admin" in firewall "default"
      And I am on "/admin/connector/config/"
    Then I should see "demo"
    When I click the first icon "glyphicon-remove-circle"
      Then I should see "You are about to delete the configuration \"demo\", click the delete button below to confirm the action."
      And I press "form.actions.delete"
    Then I should see "The config demo is removed"
