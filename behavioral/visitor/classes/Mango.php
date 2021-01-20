<?php


namespace VisitorClasses;


use VisitorInterfaces\Visitable;
use VisitorInterfaces\Visitor;

class Mango implements Visitable
{
    private float $price;
    /**
     * Car constructor.
     * @param float $price
     */
    public function __construct(float $price){

        $this->price = $price;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function accept(Visitor $visitor): void
    {
        $visitor->visit($this);
    }


}