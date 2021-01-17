<?php
require __DIR__ . '/../../../vendor/autoload.php';
use \BridgeClasses\RedPen;
use \BridgeClasses\Roto;
use \BridgeClasses\BluePen;
use \BridgeClasses\Prima;
function info()
{
    try {
        $redColor = new RedPen();
        $pen = new Roto($redColor);
        echo $pen->getProduct();
        echo '<br>';

        $blueColor = new BluePen();
        $pen = new Prima($blueColor);
        echo $pen->getProduct();
        echo '<br>';


    } catch (Exception $exception) {
        echo $exception->getMessage();
    }
}

info();