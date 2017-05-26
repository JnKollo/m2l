@login
Feature: Login
  In order to access website
  As an employee
  I need to be able to login with my credentials

  Scenario Outline: Employee Login
    Given I am on "/"
    When I fill in "email" with "<email>"
    And I fill in "password" with "<password>"
    When I press "Connexion" button
    Then the response status code should be 200

    Examples:
      | email            | password |
      | papa@gmail.com   | papa     |
      | fiston@gmail.com | fiston   |
      | bad              | bad      |
