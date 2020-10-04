<?php

namespace StaticFactoryClasses;
use StaticFactoryInterfaces\PenInterface;

class Roto implements PenInterface
{
    public function model()
    {
        return 'Roto';
    }
}