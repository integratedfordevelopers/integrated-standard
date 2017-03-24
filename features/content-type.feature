Feature: Contenttype
  In order to have content i must be able to manage content types
  As a administrator

  Scenario: See the content types
    Given I am authenticated as "demo"
      And I am on "/admin/contenttype"
    Then I should not see "Login"
      And I should see "Create new"
      And I should see "Name"
      And I should see "Type"
      And I should see "Created"
