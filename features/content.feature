Feature: Content
  In order to manage content on my website i must be able the access the backend
  As a publisher

  Scenario: See the content navigator
    Given I am authenticated as "admin"
      And I am on "/admin/content"
    Then I should not see "Login"
      And I should see "Integrated"
      And I should see "Home"
      And I should see "Content types"
      And I should see "Channels"
      And I should see "Author"
      And I should see "Properties"
      And I should see "Sort by: date modified"
      And I should see "Search selections"
      And the page must have a paginator
