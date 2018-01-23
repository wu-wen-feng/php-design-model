<?php
namespace decorator;

use drink\Drink;

class Decorator extends Drink
{
    private $Drink;

    public function __construct($Drink)
    {
        $this->Drink = $Drink;
    }

    public function cost()
    {
        return $this->getPrice() + $this->Drink->cost();
    }

    public function getDescription()
    {
        return $this->description . "-" . $this->getPrice() . "&&" . $this->Drink->getDescription();
    }

}