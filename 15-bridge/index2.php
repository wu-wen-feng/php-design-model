<?php
/**
 * File: index2.php.
 * User: Wafer
 * Date: 2018/1/16
 * Time: 16:26
 */
/*
 * 桥接模式
 *
 * 参考：http://blog.csdn.net/jhq0113/article/details/45441793
 *
 */

/* * 抽象化角色            抽象路
 * Class AbstractRoad
 */

abstract class AbstractRoad
{
    public $icar;

    abstract function Run();
}

/* * 具体的             高速公路
 * Class speedRoad
 */

class SpeedRoad extends AbstractRoad
{
    function Run()
    {
        $this->icar->Run();
        echo ":在高速公路上。";
    }
}

/* * 乡村街道
 * Class Street
 */

class Street extends AbstractRoad
{
    function Run()
    {
        $this->icar->Run();
        echo ":在乡村街道上。";
    }
}

/* * 抽象汽车接口
 * Interface ICar
 */

interface ICar
{
    function Run();
}

/* * 吉普车
 * Class Jeep
 */

class Jeep implements ICar
{
    function Run()
    {
        echo "吉普车跑";
    }
}

/* * 小汽车
 * Class Car
 */

class Car implements ICar
{
    function Run()
    {
        echo "小汽车跑";
    }
}

//------------------------桥接模式测试代码------------------
$speedRoad = new SpeedRoad();
$speedRoad->icar = new Car();
$speedRoad->Run();
echo "<hr/>";
$street = new Street();
$street->icar = new Jeep();
$street->Run();