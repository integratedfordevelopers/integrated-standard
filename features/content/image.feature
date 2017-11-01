Feature: File
  In order to place images on my website i must have be able to upload them
  As a publisher
  I want to attach images to an article

  Scenario: Upload a image
    Given I am authenticated as "admin" in firewall "default"
      And I am on "/admin/content"
      And I am going to create a "Image"
    When I fill in "integrated_content[title]" with "Image of a City"
      And I attach the file "image/city.jpg" to "integrated_content[file][file]"
      And I press "Create"
    Then I should not see "Format jpg can not be converted in to png, there is not converter supporting this format."
      And I should see "The document Image has been created"
      And I should see "Image of a City"
      And the page must have a paginator

  Scenario: Delete uploaded image
    Given I am authenticated as "admin" in firewall "default"
      And I am on "/admin/content"
    Then I should see "Integrated"
      And I should see "Content navigator"
      And I should see "Image of a City"
    When I follow "Delete item"
    Then I should see "Delete Image"
      And I should see "You are about to delete \"Image of a City\", click the delete button below to confirm the action."
    When I press "Delete"
    Then I should not see "The file could not be found."
      And I should see "The document Image has been deleted"
      And I should not see "Image of a City"

  Scenario: Upload a php file in an image (converter failing)
    Given I am authenticated as "admin" in firewall "default"
      And I am on "/admin/content"
      And I am going to create a "Image"
    Then I should see "New"
      And I should see "File"
      And I should see "Title"
      And I should see "Description"
      And I should see "Publish time"
    When I fill in "integrated_content[title]" with "Image"
      And I attach the file "php/empty.php" to "integrated_content[file][file]"
      And I press "Create"
    Then I should see "New"
      And I should see "Format php can not be converted in to png, there is not converter supporting this format."

  Scenario: Upload a jpg file in an image (converter passing)
    Given I am authenticated as "admin" in firewall "default"
      And I am on "/admin/content"
      And I am going to create a "Image"
    Then I should see "New"
      And I should see "File"
      And I should see "Title"
      And I should see "Description"
      And I should see "Publish time"
    When I fill in "integrated_content[title]" with "Image trough the converter"
      And I attach the file "image/city.jpg" to "integrated_content[file][file]"
      And I press "Create"
    Then I should not see "Format jpg can not be converted in to png, there is not converter supporting this format."
      And I should see "Image trough the converter"
      And the page must have a paginator
