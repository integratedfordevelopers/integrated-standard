@connector
Feature: Creating connector with invalid data
  In order to manage my connectors
  As an administrator
  I can not create a connector with invalid data

  Background:
    Given I am logged in as an administrator

  Scenario: Create a connector with invalid data
    When I try to create a connector
    And I add it
    Then I should see a required field error
    And I should see "0" connectors in the list
