<?php


namespace StateClasses;


use StateInterfaces\GumballInterface;

class HasQuarterState implements GumballInterface
{

    private int $randomWinner = 0;
    private GumballMachine $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter(): void
    {
        echo '<br>You can\'t insert another quarter';
    }

    public function ejectQuarter(): void
    {
        echo '<br>11 <br>';
        echo "<br>Quarter returned";
        $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
    }

    public function turnCrank(): void
    {
        $winner = rand(1, 3);
        echo '<br>7 <br>';
        echo '<br>You turned...';
        if (($winner == 2) && ($this->gumballMachine->getCount() > 1)) {
            echo '<br>winner  ' . $winner. '<br>';
            $this->gumballMachine->setState($this->gumballMachine->getWinnerState());
        } else {
            $this->gumballMachine->setState($this->gumballMachine->getSoldState());
        }

    }

    public function dispense(): void
    {
        echo '<br>No gumball dispensed';
    }

    public function toString()
    {
        return "waiting for turn of crank";
    }

}