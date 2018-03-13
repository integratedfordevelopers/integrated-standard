@content_type
Feature: Viewing content types
  In order to manage my content types
  As an administrator
  I want to be able to view content types

  Background:
    Given I am logged in as an administrator
    And there is a content type "article" named "Article"
    And there is a content type "taxonomy" named "Keyword"

  Scenario: Viewing content types
    When I view the content types
    Then I should see "2" content types in the list
    And the content type named "Article" should be in the list
    And the content type named "Keyword" should be in the list