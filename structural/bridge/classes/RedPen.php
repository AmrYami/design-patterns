<?php
namespace BridgeClasses;


use BridgeInterfaces\PenColor;

class RedPen implements PenColor
{
public function getColor()
{
    return 'Red';
}

}