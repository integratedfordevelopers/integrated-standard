Feature: Relations
  In order to link to content i need relations
  As a publisher
  I want to manage the relations on content types

  Scenario: View relations
    Given I am authenticated as "demo"
      And I am on "/admin/relation/"
    Then I should see "Name"
      And I should see "Type"
      And I should see "Created"
      And I should see "Actions"
