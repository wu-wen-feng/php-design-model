<?php
namespace coffee;

class Espresso extends Coffee
{
    public function __construct()
    {
        $this->setDescription("Espresso");
        $this->setPrice(5);
    }
}