<?php
require __DIR__ . '/../../../vendor/autoload.php';

use \SimpleFactoryFactories\PenFactory;


function info()
{
    try {
        $factory = new PenFactory();
        $type = $factory->buildPrima('Prima');
        echo $type->typeCar() . '<br>';

        $type = $factory->buildRoto('Roto');
        echo $type->typeCar();

    } catch (Exception $exception) {
        echo $exception->getMessage();
    }
    echo '<br>';
}

info();