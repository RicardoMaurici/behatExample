<?php
//features/boostrap/FeaturesContext.php

use Behat\Behat\Context\BehatContext, Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PuStringNode, Behat\Gherking\Node\TableNode;
use math\PHPadder as PHPadder;

class FeatureContext extends BehatContext
{
    private $Adder;

    /**
    * @Given /^I have the number (\d+) and the number (\d+)$/
    */
    public function iHaveTheNumberAndTheNumber($a, $b)
    {
        $this->Adder = new PHPadder($a, $b);
    }

    /**
     * @When /^I add them together$/
     */
    public function iAddThemTogether()
    {
        $this->Adder->add();
    }

    /**
     * @Given /^I have a third number of (\d+)$/
     */
    public function iHaveAThirdNumberOf($c)
    {
        $this->Adder->setThird($c);
    }

    /**
     * @Then /^I should get (\d+)$/
     */
    public function iShouldGet($sum)
    {
        //echo $this->Adder->nome;
        if ($this->Adder->getSum() != $sum) {
            throw new Exception("Valor da soma atual: " . $this->Adder->getSum());
        }
        $this->Adder->display();
    }
}