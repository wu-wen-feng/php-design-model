<?php
/**
 * File: index.php.
 * User: Wafer
 * Date: 2018/1/16
 * Time: 9:43
 */

/**
 * Interface to detect if a class is traversable using &foreach;.
 * @link http://php.net/manual/en/class.traversable.php
 */
interface Traversal
{
}

/**
 * Interface to create an external Iterator.
 * @link http://php.net/manual/en/class.iteratoraggregate.php
 */
interface Aggregate extends Traversal
{

    /**
     * Retrieve an external iterator
     * @link http://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return Traversable An instance of an object implementing <b>Iterator</b> or
     * <b>Traversable</b>
     * @since 5.0.0
     */
    public function getIterator();
}

/**
 * Interface for external iterators or objects that can be iterated
 * themselves internally.
 * @link http://php.net/manual/en/class.iterator.php
 */
interface MyIterator extends Traversal
{

    /**
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return mixed Can return any type.
     * @since 5.0.0
     */
    public function current();

    /**
     * Move forward to next element
     * @link http://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function next();

    /**
     * Return the key of the current element
     * @link http://php.net/manual/en/iterator.key.php
     * @return mixed scalar on success, or null on failure.
     * @since 5.0.0
     */
    public function key();

    /**
     * Checks if current position is valid
     * @link http://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     * @since 5.0.0
     */
    public function valid();

    /**
     * Rewind the Iterator to the first element
     * @link http://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function rewind();
}

/**
 * Class ConcreteIterator 具体的迭代器
 */
class ConcreteIterator implements MyIterator
{
    private $position = 0;
    private $array = array();

    public function __construct($array)
    {
        $this->array = $array;
        $this->position = 0;
    }

    function rewind()
    {
        $this->position = 0;
    }

    function current()
    {
        return $this->array[$this->position];
    }

    function key()
    {
        return $this->position;
    }

    function next()
    {
        ++$this->position;
    }

    function valid()
    {
        return isset($this->array[$this->position]);
    }
}

/**
 * Class MyAggregate 聚合容器
 */
class ConcreteAggregate implements Aggregate
{
    public $property;

    /**
     * 添加属性
     *
     * @param $property
     */
    public function addProperty($property)
    {
        $this->property[] = $property;
    }

    public function getIterator()
    {
        return new ConcreteIterator($this->property);
    }
}

//创建一个容器
$concreteAggregate = new ConcreteAggregate();
// 添加属性
$concreteAggregate->addProperty('属性1');
// 添加属性
$concreteAggregate->addProperty('属性2');
//给容器创建迭代器
$iterator = $concreteAggregate->getIterator();
//遍历
while ($iterator->valid()) {
    $key = $iterator->key();
    $value = $iterator->current();
    echo '键: ' . $key . ' 值: ' . $value . '<br>';
    $iterator->next();
}
$iterator->rewind();
echo($iterator->key());