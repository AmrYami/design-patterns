<?php

namespace StateClasses;

class GumballMachine
{
    private SoldOutState $soldOutState;
    private NoQuarterState $noQuarterState;
    private HasQuarterState $hasQuarterState;
    private SoldState $soldState;
    private WinnerState $winnerState;


    private $state;
    private int $count = 0;

    public function __construct(int $numberGumballs)
    {
        echo $numberGumballs;
        $this->soldOutState = new SoldOutState($this);
        $this->noQuarterState = new NoQuarterState($this);
        $this->hasQuarterState = new HasQuarterState($this);
        $this->soldState = new SoldState($this);
        $this->winnerState = new WinnerState($this);

        $this->count = $numberGumballs;
        if ($numberGumballs > 0)
            $this->state = $this->noQuarterState;
        else
            $this->state = $this->soldOutState;
    }

    public function insertQuarter(): void
    {
        echo '<br>2 <br>';
        $this->state->insertQuarter();
    }

    public function ejectQuarter(): void
    {
        echo '<br>10 <br>';
        $this->state->ejectQuarter();
    }

    public function turnCrank(): void
    {
        $this->state->turnCrank();
        $this->state->dispense();
    }

    public function releaseBall(): void
    {
        echo "A gumball comes rolling out the slot...<br>";
        if ($this->count > 0)
            $this->count = $this->count - 1;
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function refill(int $count): void
    {
        $this->count += $count;
        echo "<br>The gumball machine was just refilled; its new count is: " . $this->count;
        $this->state->refill();
    }

    /**
     * @return SoldOutState
     */
    public function getSoldOutState(): SoldOutState
    {
        return $this->soldOutState;
    }

    /**
     * @param SoldOutState $soldOutState
     */
    public function setSoldOutState(SoldOutState $soldOutState): void
    {
        $this->soldOutState = $soldOutState;
    }

    /**
     * @return NoQuarterState
     */
    public function getNoQuarterState(): NoQuarterState
    {
        echo '<br>12 <br>';
        return $this->noQuarterState;
    }

    /**
     * @param NoQuarterState $noQuarterState
     */
    public function setNoQuarterState(NoQuarterState $noQuarterState): void
    {
        $this->noQuarterState = $noQuarterState;
    }

    /**
     * @return HasQuarterState
     */
    public function getHasQuarterState(): HasQuarterState
    {

        echo '<br>4 <br>';
        return $this->hasQuarterState;
    }

    /**
     * @param HasQuarterState $hasQuarterState
     */
    public function setHasQuarterState(HasQuarterState $hasQuarterState): void
    {
        $this->hasQuarterState = $hasQuarterState;
    }

    /**
     * @return SoldState
     */
    public function getSoldState(): SoldState
    {

        echo '<br>8 <br>';
        return $this->soldState;
    }

    /**
     * @param SoldState $soldState
     */
    public function setSoldState(SoldState $soldState): void
    {
        $this->soldState = $soldState;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state): void
    {
        echo '<br>5 <br>';
        echo '<br>9 <br>';
        echo '<br>12<br>';
        $this->state = $state;
    }
    /**
     * @return WinnerState
     */
    public function getWinnerState(): WinnerState
    {
        return $this->winnerState;
    }

    /**
     * @return string
     */
    public function toString()
    {
        $string = "<br>Mighty Gumball, Inc.";
        $string .= "<br>PHP-enabled Standing Gumball Model #2004";
        $string .= "<br>Inventory: " . $this->count . " gumball";
        if ($this->count != 1) {
            $string .= "s";
        }
        $string .= "<br>";
        $string .= "Machine is " .$this->state->toString() .  "<br>";
        return $string;
    }
}