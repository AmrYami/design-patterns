<?php

namespace ProtoTypeAbstracts;
abstract class AbstractPantProtoType
{
protected $model;
private $flag;

abstract function __clone();
    /**
     * @return mixed
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * @param mixed $flag
     */
    public function setFlag($flag)
    {
        $this->flag = $flag;
    }
}