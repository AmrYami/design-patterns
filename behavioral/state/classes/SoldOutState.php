<?php


namespace StateClasses;


use StateInterfaces\GumballInterface;
use StateInterfaces\ReFill;

class SoldOutState implements GumballInterface, ReFill
{
    /**
     * @var GumballMachine
     */
    private GumballMachine $gumballMachine;

    /**
     * SoldOutState constructor.
     */
    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter()
    {
        echo "<br>You can't insert a quarter, the machine is sold out";
    }

    public function ejectQuarter()
    {
        echo "<br>You can't eject, you haven't inserted a quarter yet";
    }

    public function turnCrank()
    {
        echo "<br>You turned, but there are no gumballs";
    }

    public function dispense()
    {
        echo "<br>No gumball dispensed";
    }

    public function refill()
    {
        $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
    }
    public function toString() {
		return "sold out";
	}

}