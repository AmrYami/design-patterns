<?php
namespace SimpleFactoryClasses;

class Prima
{

    /**
     * @var string
     */
    private $type;

    public function __construct(string $type){
        $this->type = $type;
    }

    public function typeCar(){
        return 'Prima';
    }
}