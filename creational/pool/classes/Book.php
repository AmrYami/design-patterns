<?php

namespace PoolClasses;

class Book
{
    private $rentAt;

    public function __construct(){
        $this->rentAt = new \DateTime();
    }

    public function takeBook(){
        return 'book in rent';
    }

}