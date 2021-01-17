<?php


namespace DecoratorInterfaces;


use DecoratorClasses\Car;

interface PaintingInterface
{

    public function paint(Car $car);
}