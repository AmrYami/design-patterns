<?php


namespace TemplateAbstracts;


abstract class CaffeineBeverage
{
    protected bool $addOrNot = true;

    final function prepareRecipe()
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        if ($this->addOrNot) {
            $this->addCondiments();
        }
    }

    abstract public function brew(): void;

    abstract public function addCondiments(): void;

    public function boilWater(): void
    {
        echo "Boiling water";
    }

    public function pourInCup(): void
    {
        echo "Pouring into cup";
    }

    public function customerWantsCondiments(string $answer = 'y')
    {
        $this->addOrNot = true;
    }
}