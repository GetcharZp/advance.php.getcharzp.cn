<?php
/**
 * User: GetcharZp
 * Date: 2021/5/22 13:56
 */

// Final 作用
// 方法中的使用
class Hello
{
    public function sayHello()
    {
        echo "say hello";
    }

    final public function sayHelloFinal()
    {
        echo "say hello final";
    }
}

class SonHello extends Hello
{
    public function sayHello()
    {
        echo "son Say Hello";
    }

//    public function sayHelloFinal()
//    {
//        echo "son Say Hello Final";
//    }
}

$sonHello = new SonHello();
$sonHello->sayHello();
$sonHello->sayHelloFinal();
echo PHP_EOL;

// 类上面的使用
final class FinalClass
{
    public function sayHello()
    {
        echo "say hello";
    }
}

//class SonFinalClass extends FinalClass{}
//
//$sonFinalClass = new SonFinalClass();
//$sonFinalClass->sayHello();