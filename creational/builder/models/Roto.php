<?php

namespace PenModels;

class Roto extends Pen
{
    private $data = [];
    public function mergeParts($key, $value)
    {
        return $this->data[$key] = $value;
    }
}