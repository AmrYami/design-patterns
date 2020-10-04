<?php

require __DIR__ . '/../../../vendor/autoload.php';

use \StateClasses\GumballMachine;
function info()
{
    try {
        $gumballMachine = new GumballMachine(2);
echo '<br>1 <br>';
        $gumballMachine->insertQuarter();
        echo '<br>6 <br>';
        $gumballMachine->ejectQuarter();
        $gumballMachine->turnCrank();
echo $gumballMachine->toString();
        echo '<br>';
        echo '<br>';
        echo '<br>';
        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();
        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();

        echo $gumballMachine->toString();
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '<br>';
        $gumballMachine->refill(5);
        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();

        echo $gumballMachine->toString();
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '<br>';
    } catch (Exception $exception) {
        echo $exception->getMessage();
    }
}

info();