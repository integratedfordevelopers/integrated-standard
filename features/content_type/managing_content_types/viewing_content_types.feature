@content_type
Feature: Viewing content types
  In order to manage my content types
  As an administrator
  I want to be able to view content types

  Background:
    Given I am logged in as an administrator
    And there is a content type "magazine" named "Magazine"
    And there is a content type "taxonomy" named "Keyword"

  Scenario: Viewing content types
    When I view the content types
    Then the content type named "Magazine" should be in the list
    And the content type named "Keyword" should be in the list
