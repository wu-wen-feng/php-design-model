<?php
namespace coffee;

class Decaf extends Coffee
{
    public function __construct()
    {
        $this->setDescription("Decaf");
        $this->setPrice(3);
    }
}