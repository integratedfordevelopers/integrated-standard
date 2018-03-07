@content_type_
Feature: Content Type
  In order to manage my content
  As an administrator
  I must be able to create, edit, show and delete content types

  Background:
    Given I am logged in as an administrator

#  Scenario: See the content types
#    Given I am authenticated as "admin" in firewall "default"
#      And I am on "/admin/contenttype"
#    Then I should not see "Login"
#      And I should see "Create new"
#      And I should see "Name"
#      And I should see "Type"
#      And I should see "Created"
#
#  Scenario: Edit a content type
#    Given I am authenticated as "admin" in firewall "default"
#      And I am on "/admin/contenttype"
#      And I click the first icon "glyphicon-pencil"
#    Then I should see "Name"
#      And I should see "Fields"
#      And I should see "Required"
#      And I should see "Channels"
#      And I should see "Workflow"
