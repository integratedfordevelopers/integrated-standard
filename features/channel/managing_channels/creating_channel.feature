@channel
Feature: Creating channels
  In order to manage my channels
  As an administrator
  I want to be able to create a channel

  Background:
    Given I am logged in as an administrator

  Scenario: Creating channel
    When I create a channel
