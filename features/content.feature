Feature: Content
  In order to manage content on my website i must be able the access the backend
  As a publisher

  Scenario: See the content navigator
    Given I am authenticated as "demo"
      And I am on "/admin/content"
    Then I should not see "Login"
