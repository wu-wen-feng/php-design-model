<?php

/**
 * 组合模式抽象基类
 */
abstract class CompanyBase
{
    //节点名称
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    //增加节点
    abstract function add(CompanyBase $c);

    //删除节点
    abstract function remove(CompanyBase $c);

    //输出节点信息
    abstract function show($deep);

    //节点职责
    abstract function work($deep);

}

/**
 * 公司类
 */
class Company extends CompanyBase
{
    protected $item = [];

    public function add(CompanyBase $c)
    {
        $nodeName = $c->getName();
        if (!isset($this->item[$nodeName])) {
            $this->item[$nodeName] = $c;
        } else {
            throw new Exception("该节点已存在,节点名称：" . $nodeName);
        }
    }

    public function remove(CompanyBase $c)
    {
        $nodeName = $c->getName();
        if (isset($this->item[$nodeName])) {
            unset($this->item[$nodeName]);
        } else {
            throw new Exception("该节点不存在,节点名称：" . $nodeName);
        }
    }

    public function show($deep = 0)
    {
        echo str_repeat("-", $deep) . $this->name;
        echo "<br>";
        foreach ($this->item as $value) {
            $value->show($deep + 4);
        }
    }

    public function work($deep = 0)
    {
        foreach ($this->item as $value) {
            echo str_repeat("&emsp;", $deep) . "[{$this->name}]<br>";
            $value->work($deep + 2);
        }
    }
}

/**
 * 人力资源部门
 */
class HumanResources extends CompanyBase
{

    public function add(CompanyBase $c)
    {
        throw new Exception("该节点下不能增加节点");
    }

    public function remove(CompanyBase $c)
    {
        throw new Exception("该节点下无子节点");
    }

    public function show($deep = 0)
    {
        echo str_repeat("-", $deep) . $this->name;
        echo "<br>";
    }

    public function work($deep = 0)
    {
        echo str_repeat("&emsp;", $deep) . "人力资源部门的工作是为公司招聘人才";
        echo "<br>";
    }

}

/**
 * 商务部门
 */
class Commerce extends CompanyBase
{

    public function add(CompanyBase $c)
    {
        throw new Exception("该节点下不能增加节点");
    }

    public function remove(CompanyBase $c)
    {
        throw new Exception("该节点下无子节点");
    }

    public function show($deep = 0)
    {
        echo str_repeat("-", $deep) . $this->name;
        echo "<br>";
    }

    public function work($deep = 0)
    {
        echo str_repeat("&emsp;", $deep) . "商务部门的工作是为公司赚取利润";
        echo "<br>";
    }
}

$company = new Company("北京某科技公司");
$human = new HumanResources("人力资源部门");
$commerce = new Commerce("商务部门");
$company->add($human);
$company->add($commerce);

//天津分公司
//为了偷懒，分公司的部门直接copy母公司的
$subCompany1 = new Company("天津分公司");
$subCompany1->add($human);
$subCompany1->add($commerce);
$company->add($subCompany1);

//武汉分公司
$subCompany2 = new Company("武汉分公司");
$subCompany2->add($human);
$subCompany2->add($commerce);

//汉口办事处
$subCompany3 = new Company("汉口办事处");
$subCompany3->add($human);
$subCompany3->add($commerce);
$subCompany2->add($subCompany3);

$company->add($subCompany2);

//使用公司功能
$company->show();
$company->work();