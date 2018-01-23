<?php

class Product
{
    public function __construct()
    {
        $this->prepare();
        $this->step1();
        $this->step2();
        $this->finish();
    }

    public function prepare()
    {
        echo "Abs Product Prepare<br>";
    }

    public function step1()
    {
        echo "Abs Product Bake<br>";
    }

    public function step2()
    {
        echo "Abs Product Cut<br>";
    }

    public function finish()
    {
        echo "Abs Product Finish<br>";
    }
}