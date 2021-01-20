<?php


namespace ProtoTypeClasses;


use ProtoTypeAbstracts\AbstractPantProtoType;

class CotonPants extends AbstractPantProtoType
{

    protected $model = 'Coton';
    public function __clone()
    {
        // TODO: Implement __clone() method.
    }


    public function type(){
        return $this->model;
    }
}