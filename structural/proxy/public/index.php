<?php

require __DIR__ . '/../../../vendor/autoload.php';
use \ProxyProxy\ATMProxy;
function info()
{
    try {
        $proxy = new ATMProxy();
        $proxy->deposit(1000);
        $proxy->deposit(8000);
        $proxy->deposit(4000);
       echo $proxy->getBalance();
        echo '<br>';
        $proxy->withdraw(3000);
        echo $proxy->getBalance();
    } catch (Exception $exception) {
        echo $exception->getMessage();
    }
}

info();