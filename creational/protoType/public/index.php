<?php
require __DIR__ . '/../../../vendor/autoload.php';

use \ProtoTypeClasses\LeatherPants;
use \ProtoTypeClasses\CotonPants;
function info($pant)
{
    try {
        for ($i = 0; $i < 10; $i++) {
            $clones = clone $pant;
            echo $clones->type(). $i .  ' ';
        }
    } catch (Exception $exception) {
       echo $exception->getMessage();
    }
    echo '<br>';
}
$leatherPant = new LeatherPants();
info($leatherPant);
$cotonPant = new CotonPants();
info($cotonPant);