<?php
/**
 * User: GetcharZp
 * Date: 2021/5/22 19:13
 */

// 超全局 __CLASS__
// 1、获取当前这个类的类名
class Alone
{
    public function who()
    {
        echo __CLASS__ . PHP_EOL;
    }
}

$a = new Alone();
$a->who();

// 2、关键字 static self
class A
{
    public static function who()
    {
        echo __CLASS__ . PHP_EOL;
    }

    public static function test()
    {
//        self::who();
        static::who();
    }
}
class B extends A
{
    public static function who()
    {
        echo __CLASS__ . PHP_EOL;
    }
}

A::who();
A::test();

B::test();
