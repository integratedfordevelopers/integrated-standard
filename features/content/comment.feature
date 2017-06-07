Feature: Comment
  In order to place content on my website i must have be able to work in the backend
  As a publisher
  I must login to proceed so i can edit content

  Scenario: New comment
    Given I am authenticated as "admin"
      And I am on "/admin/content"
      And I am going to create a "Comment"
    When I fill in "integrated_content[title]" with "Integrated comment created with Behat"
      And I fill in "integrated_content[name]" with "Integrated Tester"
      And I fill in "integrated_content[email]" with "tester@integrated.com"
      And I fill in "integrated_content[comment]" with "Integrated will be functional tested with the awesome framework Behat."
      And I press "Create"
    Then I should see "The document Comment has been created"
      And I should see "Integrated comment created with Behat"
      And the page must have a paginator

  Scenario: Edit comment
    Given I am authenticated as "admin"
      And I am on "/admin/content"
    When I follow "Integrated comment created with Behat"
    Then I should see "Edit Comment"
      And I should see "Title"
      And I should see "Name"
      And I should see "Email"
      And I should see "comment"
      And I should see "Publish time"
      And I should see "Disabled"
      And I should see "Channels"
      And the "integrated_content[title]" field should contain "Integrated comment created with Behat"
      And the "integrated_content[name]" field should contain "Integrated Tester"
      And the "integrated_content[email]" field should contain "tester@integrated.com"
      And the "integrated_content[comment]" field should contain "Integrated will be functional tested with the awesome framework Behat."
    When I fill in "integrated_content[title]" with "Integrated Comment created while testing"
      And I press "Save"
    Then I should see "Integrated Comment created while testing"
      And I should not see "Integrated comment created with Behat"
      And the page must have a paginator

  Scenario: Delete comment
    Given I am authenticated as "admin"
      And I am on "/admin/content"
    When I follow "Delete item"
    Then I should see "Delete Comment"
      And I should see "You are about to delete \"Integrated Comment created while testing\", click the delete button below to confirm the action."
    When I press "Delete"
    Then I should see "The document Comment has been deleted"
      And I should not see "Integrated welcomes Behat"
