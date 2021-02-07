<?php

namespace BinaryTree;
class Node
{
    public $data;
    public $right = null;
    public $left = null;

    public function __construct($data)
    {
        $this->data = $data;
    }

}