<?php

namespace PenFactory;

use PenInterfaces\PenInterface;

class TypeFactory
{
    public function createShape($builder)
    {
        return new $builder();
    }
}