Feature: Group
  In order to organize access to content in the backend
  As a administrator
  I must be able to manage groups

  Scenario: Group overview
    Given I am authenticated as "admin" in firewall "default"
      And I am on "/admin/group/"
    Then I should see "Name"

  Scenario: Add group validations
    Given I am authenticated as "admin" in firewall "default"
      And I am on "/admin/group/"
    When I follow "New"
      And I fill in "integrated_user_group_form[name]" with "Be"
      And I check "integrated_user_group_form[roles][]"
      And I press "Create"
    Then I should see "This value is too short. It should have 3 characters or more."

  Scenario: Add a group without a required name
    Given I am authenticated as "admin" in firewall "default"
      And I am on "/admin/group/"
    When I follow "New"
      And I press "Create"
    Then I should see "This value should not be blank"

  Scenario: Add group
    Given I am authenticated as "admin" in firewall "default"
      And I am on "/admin/group/"
    When I follow "New"
      And I fill in "integrated_user_group_form[name]" with "Behat Administrators"
      And I check "integrated_user_group_form[roles][]"
      And I press "Create"
    Then I should see "The group Behat Administrators is created"

  Scenario: Remove group
    Given I am authenticated as "admin" in firewall "default"
      And I am on "/admin/group/"
      And I click the last icon "glyphicon-remove-circle"
    Then I should see "You are about to delete the group \"Behat Administrators\", click the delete button below to confirm the action."
    When I press "Delete"
    Then I should see "The group Behat Administrators is removed"
