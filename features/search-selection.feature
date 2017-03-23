Feature: Security
  In order to manage content search actions
  As a user

  Scenario: Search selections overview
    Given I am authenticated as "demo"
      And I am on "/admin/search-selection"
    Then I should not see "Login"
      And I should see "Search selections"
      And I should see "Short code"
      And I should see "Actions"

    Scenario: Create a search selection
      Given I am authenticated as "demo"
        And I am on "/admin/content"
        When I follow "Save current search"
      Then I should see "New Search selection"
        And I fill in "integrated_search_selection[title]" with "empty search"
        And I press "Create"
      Then I should see "Item created"
