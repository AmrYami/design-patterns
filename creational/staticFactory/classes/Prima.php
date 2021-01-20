<?php

namespace StaticFactoryClasses;
use StaticFactoryInterfaces\PenInterface;

class Prima implements PenInterface
{
public function model()
{
   return 'Prima';
}
}