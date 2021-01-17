<?php


namespace DecoratorDecorators;


use DecoratorClasses\Car;
use DecoratorInterfaces\PaintingInterface;

class PaintingDecorator implements PaintingInterface
{
    /**
     * @var PaintingInterface
     */
    private PaintingInterface $painting;

    public function __construct(PaintingInterface $painting)
    {
        $this->painting = $painting;
    }
    public function paint(Car $car)
    {
        return $this->painting->paint($car);
    }
}