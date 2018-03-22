@content_type
Feature: Editing content type
  In order to manage my content types
  As an administrator
  I want to be able to edit a content type

  Background:
    Given I am logged in as an administrator
    And there is a content type "article" named "Article"

  Scenario: Rename content type
    When I edit content type "article"
    And I rename it to "Blog"
    And I save my changes
    Then I should be notified that the item is updated
    And I should see the name "Blog"

  Scenario: Changing content type fields
    When I edit content type "article"
    And I select the field "Intro" as optional
    And I select the field "Description" as required
    And I save my changes
    Then I should be notified that the item is updated
    And the content type should have an optional field "Intro"
    And the content type should have a required field "Description"