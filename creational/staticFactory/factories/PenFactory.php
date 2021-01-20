<?php
namespace StaticFactoryFactories;


class PenFactory
{

    public static function build(string $class){
        if (class_exists($class)) {
            return new $class();
        } else {
            throw new Exception("Invalid Module type given.");
        }
    }
}