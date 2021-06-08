<?php
/**
 * User: GetcharZp
 * Date: 2021/5/20 21:29
 */


// 1、trait 的作用

// 2、怎么使用 trait
trait Hello
{
    public function sayHello()
    {
        echo "Trait Hello" . PHP_EOL;
    }
}
trait Hello2
{
    public function sayHello2()
    {
        echo "Trait Hello2" . PHP_EOL;
    }
}
 class MyHell
 {
     use Hello, Hello2;
 }

$myHello = new MyHell();
$myHello->sayHello();
$myHello->sayHello2();

// 3、冲突怎么解决
trait Hello3
{
    public function sayHello()
    {
        echo "Trait Hello3" . PHP_EOL;
    }
}
trait Hello4
{
    public function sayHello()
    {
        echo "Trait Hello4" . PHP_EOL;
    }
}
class MyHello2
{
    use Hello3, Hello4 {
//        Hello3::sayHello insteadof Hello4;
        Hello4::sayHello insteadof Hello3;
    }
}

$myHello2 = new MyHello2();
$myHello2->sayHello();
