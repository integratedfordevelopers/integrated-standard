Feature: Article
  In order to place content on my website i must have be able to work in the backend
  As a publisher
  I must login to proceed so i can edit content

  Scenario: New article
    Given I am authenticated as "demo"
      And I am going to create a "Article"
    When I fill in "integrated_content[title]" with "Integrated welcomes Behat"
      And I fill in "integrated_content[intro]" with "Integrated will be functional tested with the awesome framework Behat."
      And I press "Create"
    Then I should see "The document Article has been created"
      And I should see "Integrated welcomes Behat"
