<?php

require __DIR__ . '/../../../vendor/autoload.php';
use \AdapterWrapperClasses\Auto;
use \AdapterWrapperadapters\WeaponAdapter;
use \AdapterWrapperClasses\Manual;
use \AdapterWrapperadapters\WeaponAutoAdapter;
function info()
{
    try {
        $manual = new Manual();
        $weapon = new WeaponAdapter($manual);
        echo  $weapon->startShooting();

        echo '<br>';
        $auto = new Auto();
        $weapon = new WeaponAutoAdapter($auto);
        echo  $weapon->startShooting();

    } catch (Exception $exception) {
        echo $exception->getMessage();
    }
}

info();