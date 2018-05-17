@content_type
Feature: Editing content type
  In order to manage my content types
  As an administrator
  I want to be able to edit a content type

  Background:
    Given I am logged in as an administrator
    And there is a content type "magazine" named "Magazine"

  Scenario: Rename content type
    When I edit content type "magazine"
    And I rename it to "Book"
    And I save my changes
    Then I should be notified that the item is updated
    And I should see the name "Book"

  Scenario: Changing content type fields
    When I edit content type "magazine"
    And I select the field "Intro" as optional
    And I select the field "Description" as required
    And I save my changes
    Then I should be notified that the item is updated
    And the content type should have an optional field "Intro"
    And the content type should have a required field "Description"
