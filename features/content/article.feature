Feature: Article
  In order to place content on my website i must have be able to work in the backend
  As a publisher
  I must login to proceed so i can edit content

  Scenario: New article
    Given I am authenticated as "demo"
      And I am on "/admin/content"
      And I am going to create a "Article"
    When I fill in "integrated_content[title]" with "Integrated welcomes Behat"
      And I fill in "integrated_content[intro]" with "Integrated will be functional tested with the awesome framework Behat."
      And I press "Create"
    Then I should see "The document Article has been created"
      And I should see "Integrated welcomes Behat"

    Scenario: Edit article
      Given I am authenticated as "demo"
        And I am on "/admin/content"
      When I follow "Integrated welcomes Behat"
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
      When I fill in "integrated_content[title]" with "Integrated welcomes Behat 2"
        And I press "Save"
      Then I should see "Integrated welcomes Behat 2"
