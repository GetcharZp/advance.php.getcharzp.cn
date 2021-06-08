<?php
/**
 * User: GetcharZp
 * Date: 2021/5/22 10:53
 */

// 1、常用魔术方法 __construct()， __destruct()， __call()， __callStatic()， __get()， __set()， __isset()，
// __unset()， __sleep()， __wakeup()， __toString()， __invoke()， __set_state()， __clone() 和 __debugInfo()
class A
{
    // 直接在类中定义一个静态方法
//    public static function test()
//    {
//        echo "test";
//    }
    public $name = 'O:1:"A":2:{s:2:"12";N;s:2:"23";N;}';
    public $hello = "hello";

    public static function __callStatic($name, $arguments)
    {
        var_dump($name, $arguments);
    }

    public function __sleep()
    {
        return array(12, 23);
    }

    public function __wakeup()
    {
        echo "wake up" . PHP_EOL;
    }

    public function __toString()
    {
        return $this->name . ":" . $this->hello;
    }

    public function __invoke($value)
    {
        var_dump($value);
    }
}

$a = new A();
//$a::test(2, 12);
echo serialize($a) . PHP_EOL;
unserialize($a->name);
unserialize($a->name);
echo $a;

$a(12);


// 2、is_callable(mixed) 检测mixed是否可以用函数的形式调用

