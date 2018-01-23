<?php
/**
 * php享元模式
 * copyright (c) http://blog.csdn.net/CleverCode
 *
 */
//外部变化
class User
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

abstract class WebSite
{
    abstract function myUser(User $user);
}

//具体的网站
class ConcreteWebSite extends WebSite
{
    private $name;
    private $users;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    function myUser(User $user)
    {
        $this->users[] = $user;
        echo "网站:" . $this->name . " 用户:" . $user->getName() . "\r\n";

    }

}

//工厂
class WebSiteFactory
{
    private $hash = array();

    public function getWebSite($key)
    {
        if (false == isset($this->hash[$key])) {
            $this->hash[$key] = new ConcreteWebSite($key);
        }
        return $this->hash[$key];
    }
}

class Client
{
    public static function main()
    {
        $webSiteFactory = new WebSiteFactory();

        $boke = $webSiteFactory->getWebSite('博客');
        $boke->myUser(new User('张三'));
        $boke->myUser(new User('李四'));
        var_dump($boke);

        $weiBo = $webSiteFactory->getWebSite('微博');
        $weiBo->myUser(new User('王五'));

        $boke2 = $webSiteFactory->getWebSite('博客');
        $boke2->myUser(new User('李四'));
    }
}

Client::main();