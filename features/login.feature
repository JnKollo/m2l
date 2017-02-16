Feature: Login
  In order to access website
  As a manager user
  I need to be able to login

  Scenario: Login
    Given I am on "/"
    When I fill in "login" with "papa"
    And I fill in "password" with "papa"
    When I press "submit"
    Then I should see "Page d'accueil"
    Then show last response