<?php
namespace coffee;

use drink\Drink;

class Coffee extends Drink
{
    public function __construct()
    {
        $this->setDescription("Coffee");
        $this->setPrice(1);
    }

    public function cost()
    {
        return $this->getPrice();
    }
}