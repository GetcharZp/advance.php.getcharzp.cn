<?php
/**
 * User: GetcharZp
 * Date: 2021/5/20 23:08
 */

// 1、什么是匿名类以及它的一些优点
class A {
    //
}
// 2、举个例子
$hello = new class {
    public $hello = "name";
    public static $world = "world";

    public function sayHello()
    {
        echo "Anonymous Hello" . PHP_EOL;
    }
};
$hello->sayHello();
echo $hello->hello . PHP_EOL;
echo $hello::$world . PHP_EOL;

// 3、查看匿名类的名称
$a = new A();
echo get_class($a) . PHP_EOL;
echo get_class(new class{});

