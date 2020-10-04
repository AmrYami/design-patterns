<?php

namespace AdapterWrapperClasses;
use AdapterWrapperInterfaces\ManualInterface;

class Manual implements ManualInterface
{

    public function startShoot()
    {
        return 'single shoot';
    }
}