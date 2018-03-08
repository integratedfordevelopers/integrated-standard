@content_type
Feature: Viewing content type details
  In order to manage my content types
  As an administrator
  I want to be able to view the details of a content type

  Background:
    Given I am logged in as an administrator
    And there is a content type "Article" named "Article"

  @ui
  Scenario: Viewing content type Article
    When I want to view content type "Article"
    Then I should see the name "Article"
    And I should see the field "Title"