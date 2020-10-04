<?php

require __DIR__ . '/../../../vendor/autoload.php';

use PenInterfaces\PenInterface;
use PenClasses\PenProducer;
use PenBuilders\PrimaBuilder;
use PenBuilders\RotoBuilder;

function getInfo(PenInterface $builder)
{
    $data = PenProducer::PenProducer($builder);
    return $data;
}
$class = new PrimaBuilder();
echo '<pre>';
print_r(getInfo($class));
echo '<pre>';

$class = new RotoBuilder();
echo '<pre>';
print_r(getInfo($class));
echo '<pre>';