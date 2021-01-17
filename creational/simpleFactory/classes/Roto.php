<?php
namespace SimpleFactoryClasses;


class Roto
{
    /**
     * @var string
     */
    private $type;

    public function __construct(string $type){

        $this->type = $type;
    }

    public function typeCar(){
        return  'Roto';
    }
}