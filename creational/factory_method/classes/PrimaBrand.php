<?php
namespace BrandClasses;

use BrandInterfaces\BrandInterface;

class PrimaBrand implements BrandInterface
{

    public function createBrand()
    {
        return 'prima';
    }
}