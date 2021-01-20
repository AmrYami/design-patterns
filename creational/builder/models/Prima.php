<?php

namespace PenModels;

class Prima extends Pen
{

    private $data = [];
    public function mergeParts($key, $value)
    {
       return $this->data[$key] = $value;
    }
}