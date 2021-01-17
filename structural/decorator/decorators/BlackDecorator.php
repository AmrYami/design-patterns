<?php


namespace DecoratorDecorators;


use DecoratorClasses\Car;

class BlackDecorator extends PaintingDecorator
{
    private const COLOR = '__Black__';
    public function paint(Car $car)
    {
        $car->setColor(self::COLOR);
        return parent::paint($car);
    }

}