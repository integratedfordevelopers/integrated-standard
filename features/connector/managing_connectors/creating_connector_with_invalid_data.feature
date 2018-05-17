@connector
Feature: Creating connector with invalid data
  In order to create a connector with invalid data
  As an administrator
  I want to be able to create a connector with invalid data

  Background:
    Given I am logged in as an administrator

  Scenario: Create a connector with invalid data
    When I try to create a new connector
    And I add it
    Then I should see an error message
