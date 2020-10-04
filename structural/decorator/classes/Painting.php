<?php

namespace DecoratorClasses;

use DecoratorInterfaces\PaintingInterface;

class Painting implements PaintingInterface
{

    public function paint(Car $car)
    {
        return $car;
    }
}