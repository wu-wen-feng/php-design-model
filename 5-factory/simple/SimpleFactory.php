<?php

class SimpleFactory
{
    public function __construct()
    {
        //Can set obj here
    }

    public function createPizza($orderType)
    {
        $orderType = strtolower($orderType);
        if ($orderType == "cheese") {
            $pizza = new CheesePizza();
        } elseif ($orderType == "greek") {
            $pizza = new GreekPizza();
        } elseif ($orderType == "pepper") {
            $pizza = new PepperPizza();
        }
        return $pizza;
    }
}