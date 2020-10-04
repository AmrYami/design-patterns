<?php

require __DIR__ . '/../../../vendor/autoload.php';

function info()
{
    try {
        $car = new \VisitorClasses\Car(50000);
        $mango = new \VisitorClasses\Mango(20);
        $chair = new \VisitorClasses\Chair(3000);

        $customsTax = new \VisitorVisitors\CustomsTax();
        $valueAddedTax = new \VisitorVisitors\ValueAddedTax();
        $salesTax = new \VisitorVisitors\SalesTax();

        echo $car->getPrice();
        echo '<br>';
       $customsTax->visit($car);
        echo $car->getPrice();
        echo '<br>';
        echo '<br>';

        echo $mango->getPrice();
        echo '<br>';
        $customsTax->visit($mango);
        echo $mango->getPrice();
        echo '<br>';
        echo '<br>';


        echo $chair->getPrice();
        echo '<br>';
        $customsTax->visit($chair);
        echo $chair->getPrice();
        echo '<br>';
        echo '<br>';




        echo $car->getPrice();
        echo '<br>';
        $valueAddedTax->visit($car);
        echo $car->getPrice();
        echo '<br>';
        echo '<br>';

        echo $mango->getPrice();
        echo '<br>';
        $valueAddedTax->visit($mango);
        echo $mango->getPrice();
        echo '<br>';
        echo '<br>';


        echo $chair->getPrice();
        echo '<br>';
        $valueAddedTax->visit($chair);
        echo $chair->getPrice();
        echo '<br>';
        echo '<br>';



        echo $car->getPrice();
        echo '<br>';
        $salesTax->visit($car);
        echo $car->getPrice();
        echo '<br>';
        echo '<br>';

        echo $mango->getPrice();
        echo '<br>';
        $salesTax->visit($mango);
        echo $mango->getPrice();
        echo '<br>';
        echo '<br>';


        echo $chair->getPrice();
        echo '<br>';
        $salesTax->visit($chair);
        echo $chair->getPrice();
        echo '<br>';
        echo '<br>';
    } catch (Exception $exception) {
        echo $exception->getMessage();
    }
}

info();