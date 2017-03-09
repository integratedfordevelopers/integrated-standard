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