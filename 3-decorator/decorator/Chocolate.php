<?php
namespace decorator;

class Chocolate extends Decorator
{
    public function __construct($Drink)
    {
        parent::__construct($Drink);
        $this->setDescription("Chocolate");
        $this->setPrice(3.0);
    }
}