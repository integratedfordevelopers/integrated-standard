@content_type
Feature: Deleting content type
  In order to maintain editing of content
  As an administrator
  I want to be prevented from deleting content types with content

  Background:
    Given I am logged in as an administrator
    And there is a content type "magazine" named "Magazine"
    And there is a content "Magazine" of content type "magazine"

  Scenario: Content type with content can not be deleted
    When I try to delete content type "magazine"
    Then I should be notified that the content type is in not empty and can not be deleted
    And the content type named "Magazine" should still exist
