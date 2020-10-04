<?php


namespace CompositeClasses;


use CompositeInterfaces\GiftInterface;
use CompositeInterfaces\ProductInterface;

class GiftBox implements GiftInterface, ProductInterface
{


    /**
     * @var int
     */
    private $price;
    /**
     * @var int
     */
    private $giftPrice;

    public function __construct(int $price, int $giftPrice){

        $this->price = $price;
        $this->giftPrice = $giftPrice;
    }
    public function giftPackagePrice()
    {
        return $this->giftPrice;
    }
    public function getPrice()
    {
        return $this->giftPackagePrice() + $this->price;
    }
}