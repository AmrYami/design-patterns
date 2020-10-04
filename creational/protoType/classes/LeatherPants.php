<?php


namespace ProtoTypeClasses;


use ProtoTypeAbstracts\AbstractPantProtoType;

class LeatherPants extends AbstractPantProtoType
{
    protected $model = 'Leather';

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public function type(){
        return $this->model;
    }
}