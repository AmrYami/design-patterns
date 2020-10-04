<?php

namespace BrandFactory;

use BrandClasses\RotoBrand;
use BrandInterfaces\BrandFactoryInterface;

class RotoFactory implements BrandFactoryInterface
{
    public function createBrand()
    {
        $result = new RotoBrand();
        return $result->createBrand();
    }
}