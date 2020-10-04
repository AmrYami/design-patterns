<?php


namespace TemplateClasses;


use TemplateAbstracts\CaffeineBeverage;
use TemplateInterfaces\Hook;

class Coffe extends CaffeineBeverage
{

    function brew(): void
    {
        echo "Dripping Coffee through filter";
    }

    function addCondiments(): void
    {
        echo "Adding Sugar and Milk";
    }

    public function customerWantsCondiments(string $answer = 'y')
    {

        if ($answer == 'y') {
            $this->addOrNot = true;
        } else {
            $this->addOrNot =  false;
        }
    }

}