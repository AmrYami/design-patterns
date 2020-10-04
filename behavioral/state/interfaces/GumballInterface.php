<?php


namespace StateInterfaces;


interface GumballInterface
{
    public function insertQuarter();
    public function ejectQuarter();
    public function turnCrank();
    public function dispense();


}