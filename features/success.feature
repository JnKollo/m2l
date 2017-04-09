@success
Feature: Success page
  In order to manage my formation
  As an employee
  I need to be able to login with my credentials

  Scenario Outline: Success page
    Given I am on "/"
    When I am logged in as "papa"
    And I go to "<url>"
    Then the response status code should be 200

    Examples:
      | url                                               |
      | index.php?controller=home&action=home             |
      | index.php?controller=formation&action=home        |
      | index.php?controller=formation&action=show&id=1   |
      | index.php?controller=formation&action=search      |
      | index.php?controller=team&action=show             |
      | index.php?controller=team&action=manage&id=2      |

