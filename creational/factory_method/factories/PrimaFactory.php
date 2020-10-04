<?php

namespace BrandFactory;

use BrandClasses\PrimaBrand;
use BrandInterfaces\BrandFactoryInterface;

class PrimaFactory implements BrandFactoryInterface
{
    public function createBrand()
    {
        $result = new PrimaBrand();
        return $result->createBrand();
    }
}