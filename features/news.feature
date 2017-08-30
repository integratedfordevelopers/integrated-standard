Feature: News
  In order to see news
  As a publisher
  I must be able to create a content type and content

  Scenario: Add content type
    Given I am authenticated as "admin" in firewall "default"
      And I am on "/admin/contenttype/new?class=Integrated\Bundle\ContentBundle\Document\Content\News"
    Then I should see "New"
    When I fill in "integrated_content_type[name]" with "newstest"
      And I check "integrated_content_form_company_disabled"
      And I check "integrated_content_type_fields_default_content_enabled"
      And I press "Save"
    Then I should see "Item created"
    When I am on "/admin/content-type-page/"
      Then I should see "newstest"

  Scenario: Add content
    Given I am on "/admin/content/new?type=newstest"
    Then I should see "New newstest"
    When I fill in "integrated_content[title]" with "newstest test"
      And I fill in "integrated_content[content]" with "Some text to test the newstest"
      And I press "create"
    Then I should see "Item created"
    Given I am on "/content/newstest/newstest-newstest"
      Then I should see "Some text to test the newstest"
