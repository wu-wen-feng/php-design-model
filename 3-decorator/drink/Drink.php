<?php
namespace drink;

abstract class Drink
{
    public $description;
    public $price = 0;

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description . "-" . $this->getPrice();
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    abstract function cost();
}