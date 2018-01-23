<?php
/**
 *备忘录模式
 */
//Originator(发起人)
class Originator
{
    public $state;

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function CreateMemento()
    {
        return (new Memento($this->state));
    }

    public function SetMemento(Memento $memento)
    {
        $this->state = $memento->GetState();
    }

    public function show()
    {
        echo 'State=' . $this->state . "<br>";
    }
}

//Memento(备忘录)
class Memento
{
    public $state;

    public function __construct($state)
    {
        $this->state = $state;
    }

    public function GetState()
    {
        return $this->state;
    }
}

//Carataker(管理角色)
class Caretaker
{
    public $memento;

    public function SetMemento($value)
    {
        $this->memento = $value;
    }

    public function GetMemento()
    {
        return $this->memento;
    }
}

$origin = new Originator();
$origin->state = 'On';
$origin->show();

$mementoObj = $origin->CreateMemento();
$caretaker = new Caretaker();
$caretaker->SetMemento($mementoObj); //$caretaker是$origin的备忘录$memento的看管者，看管者可以省去

$origin->state = 'Off';
$origin->show();

$mementoObj = $caretaker->GetMemento();
$origin->SetMemento($mementoObj); //使用备忘录
$origin->show();