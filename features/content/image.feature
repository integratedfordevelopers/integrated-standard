Feature: File
  In order to place images on my website i must have be able to upload them
  As a publisher
  I want to attach images to an article

  Scenario: Upload a image
    Given I am authenticated as "admin"
      And I am on "/admin/content"
      And I am going to create a "Image"
    When I fill in "integrated_content[title]" with "Image of a City"
      And I attach the file "image/city.jpg" to "integrated_content[file][file]"
      And I press "Create"
    Then I should see "The document Image has been created"
      And I should see "Image of a City"
      And the page must have a paginator

  Scenario: Delete uploaded image
    Given I am authenticated as "admin"
      And I am on "/admin/content"
    Then I should see "Integrated"
      And I should see "Home"
      And I should see "Image of a City"
    When I follow "Delete item"
    Then I should see "Delete Image"
      And I should see "You are about to delete \"Image of a City\", click the delete button below to confirm the action."
    When I press "Delete"
    Then I should not see "The file could not be found."
      And I should see "The document Image has been deleted"
      And I should not see "Image of a City"

  Scenario: Upload a pdf in a image
    Given I am authenticated as "admin"
      And I am on "/admin/content"
      And I am going to create a "Image"
    Then I should see "New Image"
      And I should see "File"
      And I should see "Title"
      And I should see "Description"
      And I should see "Publish time"
    When I fill in "integrated_content[title]" with "Image"
      And I attach the file "pdf/Integrated.pdf" to "integrated_content[file][file]"
      And I press "Create"
    Then I should see "The mime type of the file is invalid (\"application/pdf\"). Allowed mime types are \"image/*\"."
      And I should see "Format pdf can not be converted in to png, there is not converter supporting this format."
