<?php
/**
 * User: GetcharZp
 * Date: 2021/5/23 10:53
 */

// 1、什么是常量

// 2、怎样定义一个常量
define("APP", "TEST");
const HELLO = "Hello World";
echo APP . PHP_EOL;
echo HELLO . PHP_EOL;

// 3、魔术常量 __LINE__  __FILE__  __DIR__ __FUNCTION__ __CLASS__ __TRAIT__ __METHOD__
echo __LINE__ . PHP_EOL;
echo __FILE__ . PHP_EOL;
echo __DIR__ . PHP_EOL;
function sayName()
{
    echo __FUNCTION__ . PHP_EOL;
}
sayName();
class SayClassName
{
    public static $name = __CLASS__;

    public static function sayMethodName()
    {
        echo __METHOD__ . PHP_EOL;
    }

    public function sayMethodName2()
    {
        echo __METHOD__ . PHP_EOL;
    }
}

echo SayClassName::$name . PHP_EOL;
SayClassName::sayMethodName();
$sayClassName = new SayClassName();
$sayClassName->sayMethodName2();

trait sayTraitName
{
    public static function say()
    {
        echo __TRAIT__;
    }
}
class ShowTrait
{
    use sayTraitName;
}

ShowTrait::say();
