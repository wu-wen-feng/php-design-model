<?php

class SubFactory extends Factory
{
    public function createObj($type)
    {
        $type = strtolower($type);
        if (!empty($type)) {
            if ($type == "1") {
                $obj = new Product();
            } else if ($type == "2") {
                //$pizza = new Product();
            }
            return $obj;
        }
        return null;
    }
}