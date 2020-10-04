<?php


namespace VisitorVisitors;


use VisitorClasses\Car;
use VisitorClasses\Chair;
use VisitorClasses\Mango;
use VisitorInterfaces\Visitor;

class ValueAddedTax implements Visitor
{
    public function visit($object)
    {
        if ($object instanceof Car)
            $object->setPrice($object->getPrice() * 1.9);
        elseif ($object instanceof Mango)
            $object->setPrice($object->getPrice() * 1.6);
        elseif ($object instanceof Chair)
            $object->setPrice($object->getPrice() * 1.4);
        else
            $object->setPrice($object->getPrice() * 1.5);
    }
}