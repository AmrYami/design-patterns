<?php


namespace CompositeInterfaces;


use \CompositeInterfaces\ProductInterface;

interface ActionInterface
{

    public function addItem(ProductInterface $product);
    public function removeItem(ProductInterface $product);
}