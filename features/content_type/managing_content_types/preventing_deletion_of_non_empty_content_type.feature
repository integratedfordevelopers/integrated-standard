@content_type
Feature: Deleting content type
  In order to maintain editing of content
  As an administrator
  I want to be prevented from deleting content types with content

  Background:
    Given I am logged in as an administrator
    And there is a content type "article" named "Article"
    And there is a content "Article"

  Scenario: Content type with content can not be deleted
    When I try to delete content type "article"
    Then I should be notified that the content type is in not empty and can not be deleted
    And the content type named "Article" should still exist