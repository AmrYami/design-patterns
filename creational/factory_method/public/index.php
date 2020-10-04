<?php
require __DIR__ . '/../../../vendor/autoload.php';
use BrandFactory\PrimaFactory;
use BrandFactory\RotoFactory;

function getInfoP()
{
    $brandFactory = new PrimaFactory();
    return $brandFactory->createBrand();
}

echo getInfoP(), '<br>';

function getInfoR()
{
    $brandFactory = new RotoFactory();
    return $brandFactory->createBrand();
}

echo getInfoR();
