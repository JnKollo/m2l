@success
Feature: Success page
  In order to manage my formation
  As an employee
  I need to be able to login with my credentials

  Background:
    And I am logged in as "papa"
    And I am on "/"

  Scenario Outline: Success page
    When I go to "url"
    Then I should see "Page d'accueil"

    Examples:
      | url                                             | element     |
      | index.php?controller=formation&action=index     | papa        |