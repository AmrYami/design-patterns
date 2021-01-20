<?php
require __DIR__ . '/../../../vendor/autoload.php';

use \DecoratorClasses\Car;
use  \DecoratorClasses\Painting;
use  \DecoratorDecorators\BlackDecorator;
use  \DecoratorDecorators\BlueDecorator;
use \DecoratorDecorators\RedDecorator;

function info()
{
    try {
        $car = new Car();
        $painting = new Painting();
        $painting = new BlackDecorator($painting);
        $painting = new BlueDecorator($painting);
        $res = $painting->paint($car);
        echo $res->getColor();
        echo '<br>';

        $car = new Car();
        $painting = new Painting();
        $painting = new BlackDecorator($painting);
        $painting = new RedDecorator($painting);
        $res = $painting->paint($car);
        echo $res->getColor();
        echo '<br>';

        $car = new Car();
        $painting = new Painting();
        $painting = new BlueDecorator($painting);
        $painting = new RedDecorator($painting);
        $res =  $painting->paint($car);
        echo $res->getColor();
        echo '<br>';
    } catch (Exception $exception) {
        echo $exception->getMessage();
    }
}

info();