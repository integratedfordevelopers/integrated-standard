Feature: Content Type
  In order to have content i must be able to manage content types
  As a administrator
  I must be able to manage content types

  Scenario: See the content types
    Given I am authenticated as "admin"
      And I am on "/admin/contenttype"
    Then I should not see "Login"
      And I should see "Create new"
      And I should see "Name"
      And I should see "Type"
      And I should see "Created"

  Scenario: Edit a content type
    Given I am authenticated as "admin"
      And I am on "/admin/contenttype"
      And I click the first icon "glyphicon-pencil"
    Then I should see "Name"
      And I should see "Fields"
      And I should see "Required"
      And I should see "Channels"
      And I should see "Workflow"
