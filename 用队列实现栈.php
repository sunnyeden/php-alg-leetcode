<?php
/**
 * Created by PhpStorm.
 * User: autofelix
 * Date: 2020/7/3
 * Time: 11:08
 * Email: jiangliangscau@163.com
 * Desc: 用队列实现栈.
 */
class MyStack
{

    private $stack = [];

    /**
     * MyStack constructor.
     */
    public function __construct() {}

    public function push($x)
    {
        array_push($this->stack, $x);
    }

    public function pop()
    {
        array_shift($this->stack);
    }

    /**
     * @return array|mixed
     */
    public function top()
    {
        if ($this->stack) {
            return $this->stack[0];
        } else {
            return [];
        }
    }

    /**
     * @return bool
     */
    public function empty()
    {
        return !$this->stack;
    }
}

echo Solution::level(10);