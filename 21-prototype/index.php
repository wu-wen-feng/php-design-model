<?php

interface Prototype
{
    public function copy();
}

//通过在原型类中加一个copy方法，使得这个原型类的实例可以被复制
class Demo implements Prototype
{
    private $state;

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }

    public function copy()
    {
        return clone $this;//浅拷贝

        /*
        * 深拷贝
        */
      /*$tmp = serialize($this);
      $tmp = unserialize($tmp);
      return $tmp;*/
    }
}

class Client
{
    public static function main()
    {
        $obj1 = new Demo();
        $obj2 = $obj1->copy();
        $obj1->setState(111);
        var_dump($obj1);
        var_dump($obj2);
    }
}

Client::main();