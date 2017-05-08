Feature: Relations
  In order to link to content to content i need relations
  As a publisher
  I want to manage the relations on content types

  Scenario: View relations
    Given I am authenticated as "admin"
      And I am on "/admin/relation/"
    Then I should see "Name"
      And I should see "Type"
      And I should see "Created"
      And I should see "Actions"

  Scenario: Create a relation
    Given I am authenticated as "admin"
      And I am on "/admin/relation/new"
    Then I should see "New"
      And I should see "Name"
      And I should see "Type"
      And I should see "Targets"
    When I fill in "integrated_relation[name]" with "Article with Taxonomy"
      And I fill in "integrated_relation[type]" with "taxonomy"
      And I check "integrated_relation[sources][]" with value "article"
      And I check "integrated_relation[targets][]" with value "taxonomy"
      And I check "integrated_relation[multiple]"
      And I check "integrated_relation[required]"
      And I press "Create"
    Then I should see "Item created"
      And I should see "Article with Taxonomy"
    When I am going to create a "Article"
      Then I should see "Article with Taxonomy"
