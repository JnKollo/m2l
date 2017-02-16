Feature: Login
  In order to access website
  As a manager user
  I need to be able to login

  Scenario: Manager Login
    Given I am on "/"
    When I fill in "login" with "papa"
    And I fill in "password" with "papa"
    When I press "Connexion" button
    Then I should see "Page d'accueil"
    And I should see "Gestion d'équipe"
    And I should see "papa"
    Then show last response

  Scenario: Employee Login
    Given I am on "/"
    When I fill in "login" with "fiston"
    And I fill in "password" with "fiston"
    When I press "Connexion" button
    Then I should see "Page d'accueil"
    And I should see "fiston"
    Then show last response