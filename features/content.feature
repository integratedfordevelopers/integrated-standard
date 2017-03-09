Feature: Security
  In order to block access from anonymous users
  As a user
  I must login to proceed so i can edit content

  Scenario: Create content
    Given I am authenticated as "demo"
      And I am on "/admin/content"
    Then I should not see "Login"

  Scenario: New article
    Given I am authenticated as "demo"
      And I am on "/admin/content"
