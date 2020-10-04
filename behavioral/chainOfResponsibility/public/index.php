<?php

require __DIR__ . '/../../../vendor/autoload.php';
function info()
{
    try {
        $ali = new \chainClasses\AliHandler();
        $afaf = new \chainClasses\AfafHandler();
        $mohsen = new \chainClasses\MohsenHandler();
        $ali->setNext($afaf->setNext($mohsen));
        $request = new \chainRequests\Request();
        $request->setId(4);
        $response = $ali->handle($request);
        echo $response->isDone();
        echo '<br>';
        echo $response->getHandler();
        echo '<br>';
        echo '<br>';
        echo '<br>';

        $afaf->setNext($mohsen);
        $request->setId(9);
        $response = $afaf->handle($request);
        echo $response->isDone();
        echo '<br>';
        echo $response->getHandler();
        echo '<br>';
        echo '<br>';
        echo '<br>';

        $afaf->setNext($mohsen);
        $ali->setNext($afaf);
        $request->setId(27);
        $response = $ali->handle($request);
        echo $response->isDone();
        echo '<br>';
        echo $response->getHandler();
        echo '<br>';
        echo '<br>';
        echo '<br>';


        $afaf->setNext($mohsen);
        $ali->setNext($afaf);
        $request->setId(71);
        $response = $ali->handle($request);
        echo $response->isDone();
        echo '<br>';
        echo $response->getHandler();
        echo '<br>';
        echo '<br>';
        echo '<br>';


    } catch (Exception $exception) {
        echo $exception->getMessage();
    }
}

info();