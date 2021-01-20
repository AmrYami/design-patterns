<?php


require __DIR__ . '/../../../vendor/autoload.php';

use \StaticFactoryFactories\PenFactory;


function info()
{
    try {
        $factory = new PenFactory();
       $prima = $factory->build('\StaticFactoryClasses\Prima');
       echo $prima->model() . '<br>';
        $roto = $factory->build('\StaticFactoryClasses\Roto');
        echo $roto->model();

    } catch (Exception $exception) {
        echo $exception->getMessage();
    }
    echo '<br>';
}

info();