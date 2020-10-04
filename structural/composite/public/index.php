<?php
require __DIR__ . '/../../../vendor/autoload.php';

use \CompositeClasses\SimpleBox;
use \CompositeClasses\BigBox;
use \CompositeClasses\GiftBox;
function info()
{
    try {
        $item1 = new SimpleBox(500);
        $item2 = new SimpleBox(800);
        $item3 = new SimpleBox(700);
        $allItems = new BigBox([$item1, $item2, $item3]);
        echo 'total price: '. $allItems->getPrice();
        echo '<br>';
        $giftPrice = new GiftBox(50,80);
        $allItems->addItem($giftPrice);
        echo 'total price after add item : '. $allItems->getPrice();
        echo '<br>';
        $allItems->removeItem($item3);
        echo 'total price after remove item : '. $allItems->getPrice();
        echo '<br>';
    } catch (Exception $exception) {
        echo $exception->getMessage();
    }
}

info();