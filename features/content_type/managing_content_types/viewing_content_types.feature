@content_type
Feature: Viewing content types
  In order to manage my content types
  As an administrator
  I want to be able to view content types

  Background:
    Given I am logged in as an administrator
    And there is a content type "Article" named "Article"
    And there is a content type "Taxonomy" named "Keyword"

  Scenario: Viewing content types
    When I want to view content types
    Then I should see "2" content types in the list
    And the content type "Article" should be in the list

