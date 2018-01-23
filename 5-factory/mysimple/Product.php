<?php

class Product
{
    public function __construct()
    {
        echo "This is product<br>";
        $this->prepare();
        $this->step1();
        $this->step2();
        $this->finish();
    }

    public function prepare()
    {
        echo "Product prepare<br>";
    }

    public function step1()
    {
        echo "Product step 1<br>";
    }

    public function step2()
    {
        echo "Product step 2<br>";
    }

    public function finish()
    {
        echo "Product finish<br>";
    }
}