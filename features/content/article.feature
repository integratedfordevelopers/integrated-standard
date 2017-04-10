Feature: Article
  In order to place content on my website i must have be able to work in the backend
  As a publisher
  I must login to proceed so i can edit content

  Scenario: New article
    Given I am authenticated as "demo"
      And I am on "/admin/content"
      And I am going to create a "Article"
    When I fill in "integrated_content[title]" with "Integrated article created with Behat"
      And I fill in "integrated_content[intro]" with "Integrated will be functional tested with the awesome framework Behat."
      And I press "Create"
    Then I should see "The document Article has been created"
      And I should see "Integrated article created with Behat"
      And the page must have a paginator

  Scenario: Edit article
    Given I am authenticated as "demo"
      And I am on "/admin/content"
    When I follow "Integrated article created with Behat"
    Then I should see "Edit Article"
      And I should see "History"
      And I should see "Title"
      And I should see "Slug"
      And I should see "Subtitle"
      And I should see "Authors"
      And I should see "Source"
      And I should see "Intro"
      And I should see "Description"
      And I should see "Address"
      And I should see "Publish time"
      And I should see "Disabled"
      And I should see "Channels"
      And the "integrated_content[slug]" field should contain "integrated-article-created-with-behat"
      And the "integrated_content[title]" field should contain "Integrated article created with Behat"
      And the "integrated_content[intro]" field should contain "Integrated will be functional tested with the awesome framework Behat."
    When I fill in "integrated_content[title]" with "Integrated welcomes Behat"
      And I press "Save"
    Then I should see "Integrated welcomes Behat"
      And I should not see "Integrated article created with Behat"
      And the page must have a paginator

  Scenario: Delete article
    Given I am authenticated as "demo"
      And I am on "/admin/content"
    When I follow "Delete item"
    Then I should see "Delete Article"
      And I should see "You are about to delete \"Integrated welcomes Behat\", click the delete button below to confirm the action."
    When I press "Delete"
    Then I should see "The document Article has been deleted"
      And I should not see "Integrated welcomes Behat"
