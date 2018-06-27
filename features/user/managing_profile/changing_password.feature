@user
Feature: Changing password
  In order to enhance the security of my account
  As an user
  I want to be able to change my password

  Background:
    Given there is a user "user@example.com" identified by "password" in the Integrated scope
    And I am logged in as "user@example.com"

  Scenario: Changing my password
    When I want to change my password
    And I change password to "newpassword123"
    And I save my changes
    Then I should be notified that my profile has been changed
