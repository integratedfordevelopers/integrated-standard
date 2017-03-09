Feature: Security
  In order to block access from anonymous users
  As a user
  I must login to proceed so i can edit content

  Scenario: Login Screen
    Given I am on "/admin/content"
    Then I should see "Login"

  Scenario: Invalid Login
    Given I am on "/admin/content"
    When I fill in "_username" with "anonymous"
      And I fill in "_password" with "blank"
      And I press "Login"
    Then I should see "Bad credentials."

  Scenario: Valid Login
    Given I am on "/admin/content"
    When I fill in "_username" with "demo"
      And I fill in "_password" with "demo"
      And I press "Login"
    Then I should not see "Bad credentials."
      And I should see "Integrated"
      And I should see "Home"
      And I should see "Create new"

  Scenario: Edit my credentials
    Given I am authenticated as "demo"
      And I am on "/admin/content"
    When I follow "Edit profile"
      And I fill in "integrated_user_profile_form[username]" with "demo"
      And I fill in "integrated_user_profile_form[password]" with "demo"
    Then I press "Save"
      Then I should see "Password will only be changed if a new password is entered"
