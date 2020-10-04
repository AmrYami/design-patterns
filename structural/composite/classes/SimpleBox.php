<?php


namespace CompositeClasses;


use CompositeInterfaces\ProductInterface;

class SimpleBox implements ProductInterface
{

    /**
     * @var int
     */
    private $price;

    public function __construct(int $price){

        $this->price = $price;
    }
    public function getPrice()
    {
        return $this->price;
    }
}