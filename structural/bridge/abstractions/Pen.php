<?php

namespace BridgeAbstractions;
use BridgeInterfaces\PenColor;

abstract class Pen
{

    /**
     * @var PenColor
     */
    protected $penColor;

    public function __construct(PenColor $penColor){

        $this->penColor = $penColor;
    }
    abstract function getProduct();

}