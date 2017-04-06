Feature: File
  In order to place images on my website i must have be able to upload them
  As a publisher
  I want to attach images to an article

  Scenario: Upload a image
    Given I am authenticated as "demo"
      And I am on "/admin/content"
      And I am going to create a "Image"
    When I fill in "integrated_content[title]" with "Image of a City"
      And I attach the file "image/city.jpg" to "integrated_content[file][file]"
      And I press "Create"
    Then I should see "The document Image has been created"
      And I should see "Image of a City"

  Scenario: Upload a pdf
    Given I am authenticated as "demo"
      And I am on "/admin/content"
      And I am going to create a "Image"
    When I fill in "integrated_content[title]" with "Image"
      And I attach the file "pdf/Integrated.pdf" to "integrated_content[file][file]"
      And I press "Create"
    Then I should see "The mime type of the file is invalid (\"application/pdf\"). Allowed mime types are \"image/*\"."
      And I should see "Format pdf can not be converted in to png, there is not converter supporting this format."
