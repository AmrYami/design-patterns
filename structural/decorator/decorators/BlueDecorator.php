<?php


namespace DecoratorDecorators;


use DecoratorClasses\Car;

class BlueDecorator extends PaintingDecorator
{

    private const COLOR = '__Blue__';
    public function paint(Car $car)
    {
        $car->setColor(self::COLOR);
        return parent::paint($car);
    }
}