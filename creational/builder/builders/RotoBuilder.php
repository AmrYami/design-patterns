<?php


namespace PenBuilders;


use PenInterfaces\PenInterface;
use PenModels\Pen;
use PenModels\Roto;

class RotoBuilder implements PenInterface
{
    private $type;

    public function createPen()
    {
        $this->type = new Roto();
    }

    public function addBody()
    {
        $this->type->mergeParts('body', 'body roto');
    }

    public function addtube()
    {
        $this->type->mergeParts('tube', 'tube roto');
    }
    public function addInk()
    {
        $this->type->mergeParts('ink', 'ink roto');
    }

    public function addCover()
    {
        $this->type->mergeParts('cover', 'cover roto');
    }

    public function getPen(): Pen
    {
       return $this->type;
    }
}