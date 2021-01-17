<?php


namespace DecoratorDecorators;


use DecoratorClasses\Car;

class RedDecorator extends PaintingDecorator
{
    private const COLOR = '__Red__';

    public function paint(Car $car)
    {
        $car->setColor(self::COLOR);
        return parent::paint($car);
    }

}