<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

use Behat\MinkExtension\Context\MinkContext;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements SnippetAcceptingContext
{

  private $couponCode;
  
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
     * @Given I have a valid coupon code :couponCode
     */
    public function iHaveAValidCouponCode($couponCode)
    {
      $this->couponCode = $couponCode;
    }

    /**
     * @When I try to use redeem the coupon code
     */
    public function iTryToUseRedeemTheCouponCode()
    {
      //var_export($this->getSession()->visit('http://demo-ce.dev/'));
    }

    /**
     * @Then I should see the error message :arg1
     */
    public function iShouldSeeTheErrorMessage($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given I have the valid coupon code :arg1
     */
    public function iHaveTheValidCouponCode($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When I try to redeem the coupon code
     */
    public function iTryToRedeemTheCouponCode()
    {
        throw new PendingException();
    }

    /**
     * @Given I am logged in as a “Return visitor” customer
     */
    public function iAmLoggedInAsAReturnVisitorCustomer()
    {
        throw new PendingException();
    }
}