<?php


namespace PenClasses;


use PenFactory\TypeFactory;
use PenInterfaces\PenInterface;
use PenModels\Pen;

class PenProducer
{
    private $builder;

    public function PenProducer(PenInterface $builder): Pen
    {
//        $builder = TypeFactory::createShape($builder);
        $builder->createPen();
        $builder->addBody();
        $builder->addtube();
        $builder->addInk();
        $builder->addCover();
        return $builder->getPen();
    }
}