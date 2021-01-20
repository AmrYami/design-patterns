<?php


namespace StateClasses;


use StateInterfaces\GumballInterface;

class WinnerState implements GumballInterface
{
    /**
     * @var GumballMachine
     */
    private GumballMachine $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {

        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter()
    {
        echo "Please wait, we're already giving you a Gumball";
    }

    public function ejectQuarter()
    {
        echo "Please wait, we're already giving you a Gumball";
    }

    public function turnCrank()
    {
        echo "Turning again doesn't get you another gumball!";
    }

    public function dispense()
    {
        $this->gumballMachine->releaseBall();
        if ($this->gumballMachine->getCount() == 0) {
            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        } else {
            $this->gumballMachine->releaseBall();
            echo "YOU'RE A WINNER! You got two gumballs for your quarter";
            if ($this->gumballMachine->getCount() > 0) {
                $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
            } else {
                echo "Oops, out of gumballs!";
                $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
            }
        }
    }

    public function toString()
    {
        return "despensing two gumballs for your quarter, because YOU'RE A WINNER!";
    }

}