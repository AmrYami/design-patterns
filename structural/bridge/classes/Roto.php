<?php
namespace BridgeClasses;

use BridgeAbstractions\Pen;
use BridgeInterfaces\PenColor;

class Roto extends Pen
{
public function __construct(PenColor $penColor)
{
    parent::__construct($penColor);
}
public function getProduct()
{
    return sprintf('Pen type is %s and Pen color is %s','Roto',$this->penColor->getColor());
}
}