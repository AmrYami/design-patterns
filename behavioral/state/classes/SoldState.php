<?php


namespace StateClasses;


use StateInterfaces\GumballInterface;

class SoldState implements GumballInterface
{
    /**
     * @var GumballMachine
     */
    private GumballMachine $gumballMachine;

    /**
     * SoldState constructor.
     */
    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter(): void
    {
        echo "<br>Please wait, we're already giving you a gumball";
    }

    public function ejectQuarter(): void
    {
        echo "<br>Sorry, you already turned the crank";
    }

    public function turnCrank(): void
    {
        echo "<br>Turning twice doesn't get you another gumball!";
    }

    public function dispense(): void
    {
        $this->gumballMachine->releaseBall();
        if ($this->gumballMachine->getCount() > 0) {
            $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
        } else {
            echo "Oops, out of gumballs!";
            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        }
    }

    public function toString()
    {
        return "dispensing a gumball";
    }

}