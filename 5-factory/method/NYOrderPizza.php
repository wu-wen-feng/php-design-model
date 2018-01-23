<?php

class NYOrderPizza extends OrderPizza
{
    public function createPizza($type)
    {
        $type = strtolower($type);
        if (!empty($type)) {
            if ($type == "cheese") {
                $pizza = new NYCheesePizza();
            } else if ($type == "pepper") {
                $pizza = new NYPepperPizza();
            }
            return $pizza;
        }
        return null;
    }
}