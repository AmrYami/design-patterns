<?php


namespace TemplateClasses;


use TemplateAbstracts\CaffeineBeverage;
use TemplateInterfaces\Hook;

class Tea extends CaffeineBeverage
{

    function brew(): void
    {
        echo "Steeping the tea";
    }

    function addCondiments(): void
    {
        echo "Adding Lemon";
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