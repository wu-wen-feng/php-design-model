<?php
/**
 * Created by PhpStorm->
 * User: Jang
 * Date: 2015/6/10
 * Time: 10:34
 */
//状态接口
interface IState
{
    function WriteCode(Work $w);
}

//上午工作状态
class AmState implements IState
{
    public function WriteCode(Work $w)
    {
        if ($w->hour <= 12) {
            echo "当前时间：{$w->hour}点，上午工作；犯困，午休。<br/>";
        } else {
            $w->SetState(new PmState());
            $w->WriteCode();
        }
    }
}

//下午工作状态
class PmState implements IState
{
    public function WriteCode(Work $w)
    {
        if ($w->hour <= 17) {
            echo "当前时间：{$w->hour}点，下午工作状态还不错，继续努力。<br/>";
        } else {
            $w->SetState(new NightState());
            $w->WriteCode();
        }
    }
}

//晚上工作状态
class NightState implements IState
{

    public function WriteCode(Work $w)
    {
        if ($w->IsDone) {
            $w->SetState(new BreakState());
            $w->WriteCode();
        } else {
            if ($w->hour <= 21) {
                echo "当前时间：{$w->hour}点，加班哦，疲累至极。<br/>";
            } else {
                $w->SetState(new SleepState());
                $w->WriteCode();
            }
        }
    }
}

//休息状态
class BreakState implements IState
{

    public function WriteCode(Work $w)
    {
        echo "当前时间：{$w->hour}点，下班回家了。<br/>";
    }
}

//睡眠状态
class SleepState implements IState
{

    public function WriteCode(Work $w)
    {
        echo "当前时间：{$w->hour}点，不行了，睡着了。<br/>";
    }
}

//工作状态
class Work
{
    private $current;
    public $hour;
    public $isDone;

    public function __construct()
    {
        $this->current = new AmState();
    }

    public function SetState(IState $s)
    {
        $this->current = $s;
    }

    public function WriteCode()
    {
        $this->current->WriteCode($this);
    }
}

$emergWork = new Work();
$emergWork->hour = 9;
$emergWork->WriteCode();
$emergWork->hour = 10;
$emergWork->WriteCode();
$emergWork->hour = 13;
$emergWork->WriteCode();
$emergWork->hour = 14;
$emergWork->WriteCode();

$emergWork->hour = 17;
$emergWork->WriteCode();

$emergWork->IsDone = false;
$emergWork->hour = 19;
$emergWork->WriteCode();

$emergWork->IsDone = true;
$emergWork->hour = 22;
$emergWork->WriteCode();