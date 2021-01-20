<?php


namespace AdapterWrapperadapters;


use AdapterWrapperInterfaces\ManualInterface;

class WeaponAdapter
{
    /**
     * @var ManualInterface
     */
    private $manual;

    public function __construct(ManualInterface $manual){

        $this->manual = $manual;
    }

     public function startShooting()
{
    return $this->manual->startShoot();
}
}