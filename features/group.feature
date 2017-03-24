Feature: Group
  In order to organize access to content in the backend
  As a administrator
  I must be able to manage groups

  Scenario: Group overview
    Given I am authenticated as "demo"
      And I am on "/admin/group/"
    Then I should see "Name"

  Scenario: Add group
    Given I am authenticated as "demo"
      And I am on "/admin/group/"
    When I follow "New"
      And I fill in "integrated_user_group_form[name]" with "demo"
      And I check "integrated_user_group_form[roles][]"
      And I press "Create"
    Then I should see "The group demo is created"

    Scenario: Remove group
      Given I am authenticated as "demo"
        And I am on "/admin/group/"
        And I am click icon "glyphicon-remove-circle"
      Then I should see "You are about to delete the group \"demo\", click the delete button below to confirm the action."
      When I press "Delete"
      Then I should see "The group demo is removed"
