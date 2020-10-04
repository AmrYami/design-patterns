<?php


namespace VisitorVisitors;


use VisitorClasses\Car;
use VisitorClasses\Chair;
use VisitorClasses\Mango;
use VisitorInterfaces\Visitor;

class CustomsTax implements Visitor
{
    public function visit($object)
    {
        if ($object instanceof Car)
            $object->setPrice(($object->getPrice() * 1.8));
        elseif ($object instanceof Mango)
            $object->setPrice($object->getPrice() * 1.1);
        elseif ($object instanceof Chair)
            $object->setPrice($object->getPrice() * 1.5);
        else
            $object->setPrice($object->getPrice() * 1.5);
    }
}