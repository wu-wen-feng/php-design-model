<?php

class Sub_system_one
{
    public function method_one()
    {
        echo "subsystem one method one<br/>";
    }
}

class Sub_system_two
{
    public function method_two()
    {
        echo "subsystem two method two<br/>";
    }
}

class Sub_system_three
{
    public function method_three()
    {
        echo "subsystem three method three<br/>";
    }
}

class Sub_system_four
{
    public function method_four()
    {
        echo "subsystem three method four<br/>";
    }
}

class Facade
{
    private $_one;
    private $_two;
    private $_three;
    private $_four;

    public function __construct()
    {
        $this->_one = new Sub_system_one();
        $this->_two = new Sub_system_two();
        $this->_three = new Sub_system_three();
        $this->_four = new Sub_system_four();
    }

    public function method_A()
    {
        echo "method group A<br/>";
        $this->_one->method_one();
        $this->_two->method_two();
        $this->_four->method_four();
    }

    public function method_B()
    {
        echo "method group B<br/>";
        $this->_two->method_two();
        $this->_three->method_three();
    }
}


$facade = new Facade();
$facade->method_A();
$facade->method_B();