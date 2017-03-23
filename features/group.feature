Feature: Group
  In order to organize access to content in the backend
  As a administrator
  I must be able to manage groups

  Scenario: Group overview
    Given I am authenticated as "demo"
      And I am on "/admin/group/"
    Then I should see "Name"
