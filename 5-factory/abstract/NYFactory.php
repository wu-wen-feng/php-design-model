<?php

class NYFactory implements AbstractFactory
{
    public function __construct()
    {

    }

    public function createPizza($type)
    {
        $type = strtolower($type);
        if ($type == "cheese") {
            $pizza = new NYCheesePizza();
        } else if ($type == "pepper") {
            $pizza = new NYPepperPizza();
        }
        return $pizza;
    }
}