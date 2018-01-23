<?php

/*驱动接口*/

interface db_driver
{
    function connect();

    function query($sql);
}

/*mysql的数据库实现*/

class db_mysql implements db_driver
{

    public function connect()
    {
        /*具体代码实现*/
    }

    public function query($sql)
    {
        /*具体代码实现*/
        echo "Mysql query";
    }
}

/*pdo的数据库实现*/

class db_pdo implements db_driver
{

    public function connect()
    {
        /*具体代码实现*/
    }

    public function query($sql)
    {
        /*具体代码实现*/
    }
}

/*定义适配器类*/

class db_adapter
{

    private $db;

    function __construct($db_obj)
    {
        $this->db = $db_obj;
    }

    function connect()
    {
        $this->db->connect();
    }

    function query($sql)
    {
        $this->db->query($sql);
    }
}

/*客户端应用*/
$db = new db_adapter(new db_mysql());
$db->query("sql");