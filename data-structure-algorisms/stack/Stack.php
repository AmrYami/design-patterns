<?php

namespace Stack;
class Stack
{
    private $stack = [];

    /**
     * @return array
     */
    public function getStack(): array
    {
        return $this->stack;
    }
    private $limit = 10;


    public function push($val){
        if (count($this->stack) < $this->limit){
            array_unshift($this->stack, $val);
        }
    }

    public function pop(){
            if (!empty($this->stack))
                array_shift($this->stack);
    }
    public function top(){
        return current($this->stack);
    }

    public function isEmpty(){
        return (int) empty($this->stack);
    }
}