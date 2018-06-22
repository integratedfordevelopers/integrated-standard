@user
Feature: Preventing empty password
  In order to enhance the security of my account
  As an user
  I want to be prevented to have an empty password

  Background:
    Given there is a user "user@example.com" identified by "password" in the Integrated scope
    And I am logged in as "user@example.com"

  Scenario: Empty password can not be saved
    When I try to change my password
    And I save my changes
    Then I should be notified that my password is empty
