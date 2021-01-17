<?php


namespace CompositeClasses;


use CompositeInterfaces\ActionInterface;
use CompositeInterfaces\ProductInterface;

class BigBox implements ActionInterface,ProductInterface
{

    /**
     * @var array
     */
    private $products;

    public function __construct(array $products){

        $this->products = $products;
    }

    public function getPrice()
    {
        $totalPrice = 0;
        foreach ($this->products as $product){
            $totalPrice += $product->getPrice();
        }
        return $totalPrice;
    }
    public function addItem(ProductInterface $product)
    {
        $this->products[] = $product;
    }

    public function removeItem(ProductInterface $product)
    {
        $this->products = array_filter($this->products,function ($productItem) use ($product){
            if($productItem != $product)
            {
                return $productItem;
            }
            return null;
        });
    }
}