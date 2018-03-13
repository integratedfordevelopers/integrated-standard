@content_type
Feature: Deleting content type
  In order to clean my content types
  As an administrator
  I want to be able to delete a content type

  Background:
    Given I am logged in as an administrator
    And there is a content type "article" named "Article"

  Scenario: Delete content type
    When I delete content type "article"
    Then I should be notified that the item is deleted
    And the content type named "Article" should be deleted