<?php

namespace SimpleFactoryFactories;
use SimpleFactoryClasses\Prima;
use SimpleFactoryClasses\Roto;

class PenFactory
{

    public function buildPrima(string $type){
        return new Prima($type);
    }
    public function buildRoto(string $type){
        return new Roto($type);
    }
}