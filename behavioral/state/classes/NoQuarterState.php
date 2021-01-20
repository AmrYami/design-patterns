<?php


namespace StateClasses;


use StateInterfaces\GumballInterface;

class NoQuarterState implements GumballInterface
{
    /**
     * @var GumballMachine
     */
    private GumballMachine $gumballMachine;

    /**
     * NoQuarterState constructor.
     */
    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter()
    {
        echo '<br>3 <br>';
        echo '<br>You inserted a quarter';
        $this->gumballMachine->setState($this->gumballMachine->getHasQuarterState());
    }

    public function ejectQuarter()
    {
        echo '<br>You haven\'t inserted a quarter';
    }

    public function turnCrank()
    {
        echo "You turned, but there's no quarter";
    }

    public function dispense()
    {
        echo "You need to pay first";
    }

    public function toString() {
		return "waiting for quarter";
	}
}