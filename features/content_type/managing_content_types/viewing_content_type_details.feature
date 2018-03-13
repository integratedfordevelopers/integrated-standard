@content_type
Feature: Viewing content type details
  In order to see the details of the content types
  As an administrator
  I want to be able to view the details of a content type

  Background:
    Given I am logged in as an administrator
    And there is a content type "article" named "Article"

  Scenario: Viewing content type Article
    When I view content type "article"
    Then I should see the name "Article"
    And I should see the required field "Title"
    And I should see the optional field "Description"