<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use Behat\Behat\Tester\Exception\PendingException;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @When I press :button button
     */
    public function iPressButton($button)
    {
      $button = $this->fixStepArgument($button);
      $this->getSession()->getPage()->pressButton($button);
    }

    /**
     * @Given I am logged in as :arg1
     */
    public function iAmLoggedInAs($arg1)
    {
        $this->visitPath('/');
        $this->getSession()->getPage()->fillField('login', $arg1);
        $this->getSession()->getPage()->fillField('password', $arg1);
        $this->getSession()->getPage()->pressButton('Connexion');
    }

}
