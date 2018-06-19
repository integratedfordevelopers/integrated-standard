@user
Feature: Preventing short password
  In order to enhance the security of my account
  As a user
  I want to be prevented from typos in my password

  Background:
    Given there is a user "user@example.com" identified by "password" in the Integrated scope
    And I am logged in as "user@example.com"

  Scenario: Password must be repeated
    When I try to change my password
    And I change password to "password1" and repeat "password2"
    And I save my changes
    Then I should be notified that my password is not valid
