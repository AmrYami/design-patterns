<?php

namespace BrandClasses;

use BrandInterfaces\BrandInterface;

class RotoBrand implements BrandInterface
{

    public function createBrand()
    {
        return 'roto';
    }
}