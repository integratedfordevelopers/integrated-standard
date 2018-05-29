@connector
Feature: Prevent creating connector with invalid data
  In order to create only valid connectors
  As an administrator
  I want to be prevented from creating connectors with invalid data

  Background:
    Given I am logged in as an administrator

  Scenario: Preventing from creating a connector with invalid data
    When I try to create a connector
    And I add it
    Then I should see a required error for the name field
    And I should see "0" connectors in the list
