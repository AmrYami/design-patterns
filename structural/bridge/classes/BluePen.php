<?php
namespace BridgeClasses;


use BridgeInterfaces\PenColor;

class BluePen implements PenColor
{
public function getColor()
{
    return 'Blue';
}
}