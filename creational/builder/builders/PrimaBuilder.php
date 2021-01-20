<?php


namespace PenBuilders;


use PenInterfaces\PenInterface;
use PenModels\Pen;
use PenModels\Prima;

class PrimaBuilder implements PenInterface
{
private $type ;
    public function createPen()
    {
        $this->type = new Prima();
    }

    public function addBody()
    {
        $this->type->mergeParts('body', 'shape prima');
    }

    public function addtube()
    {
        $this->type->mergeParts('tybe', 'tube prima');
    }

    public function addInk()
    {
        $this->type->mergeParts('ink', 'ink prima');
    }

    public function addCover()
    {
        $this->type->mergeParts('cove', 'cover prima');
    }

    public function getPen() :Pen
    {
        return $this->type;
    }
}