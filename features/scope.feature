Feature: Scope
  In order to organize access to content in the backend
  As a administrator
  I must be able to manage scopes

  Scenario: Scope overview
    Given I am authenticated as "admin"
    And I am on "/admin/scope/"
    Then I should see "Name"

  Scenario: Add scope
    Given I am authenticated as "admin"
    And I am on "/admin/scope/"
    When I follow "New"
    And I fill in "integrated_user_scope_form[name]" with "Behat Scope"
    And I press "Create"
    Then I should see "The scope Behat Scope is created"

  Scenario: Remove scope
    Given I am authenticated as "admin"
    And I am on "/admin/scope/"
    And I click the last icon "glyphicon-remove-circle"
    Then I should see "You are about to delete the scope \"Behat Scope\", click the delete button below to confirm the action."
    When I press "Delete"
    Then I should see "The scope Behat Scope is removed"
