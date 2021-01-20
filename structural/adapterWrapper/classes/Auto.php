<?php


namespace AdapterWrapperClasses;


use AdapterWrapperInterfaces\AutoInterface;

class Auto implements AutoInterface
{

    public function startAuto()
    {
        return 'auto shoot';
    }
}