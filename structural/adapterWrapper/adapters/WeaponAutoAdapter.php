<?php


namespace AdapterWrapperadapters;


use AdapterWrapperClasses\Auto;

class WeaponAutoAdapter
{

    /**
     * @var Auto
     */
    private $auto;

    public function __construct(Auto $auto)
    {

        $this->auto = $auto;
    }

    public function startShooting()
    {
        return $this->auto->startAuto();
    }
}