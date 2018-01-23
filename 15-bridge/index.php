<?php

abstract class Staff
{
    abstract public function staffData();
}

class CommonStaff extends Staff
{
    public function staffData()
    {
        return "小名，小红，小黑";
    }
}

class VipStaff extends Staff
{
    public function staffData()
    {
        return '小星、小龙';
    }
}

abstract class SendType
{
    abstract public function send($to, $content);
}

class QQSend extends SendType
{
    public function __construct()
    {
        // 与QQ接口连接方式
    }

    public function send($to, $content)
    {
        return $content . '（To ' . $to . ' From QQ）<br>';
    }
}

class SendInfo
{
    protected $_level;
    protected $_method;

    public function __construct($level, $method)
    {
        //  这里可以使用单例控制资源的消耗
        $this->_level = $level;
        $this->_method = $method;
    }

    public function sending($content)
    {
        $staffArr = $this->_level->staffData();
        $result = $this->_method->send($staffArr, $content);
        echo $result;
    }
}

$info = new SendInfo(new VipStaff(), new QQSend());
$info->sending('回家吃饭');

$info = new SendInfo(new CommonStaff(), new QQSend());
$info->sending('继续上班');