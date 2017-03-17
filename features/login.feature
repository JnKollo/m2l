@login
Feature: Login
  In order to access website
  As an employee
  I need to be able to login with my credentials

  Scenario Outline: Employee Login
    Given I am on "/"
    When I fill in "login" with "<login>"
    And I fill in "password" with "<password>"
    When I press "Connexion" button
    Then the response status code should be <code>
    And I should see "Page d'accueil"

    Examples:
      | login  | password | code |
      | papa   | papa     | 200  |
      | fiston | fiston   | 200  |
      | bad    | bad      | 200  |
