<?php
/**
 * User: GetcharZp
 * Date: 2021/5/23 14:26
 */

// 1、函数定义、函数的参数、函数的返回值
//function functionName($param ..)
//{
//    // 操作
//}
function getAdd($a, $b)
{
    return array($a, $b, $a + $b);
}
$arr = getAdd(12, 23);
var_dump($arr);
list($a, $b, $total) = getAdd(12, 23);
var_dump($a, $b, $total);

// 2、函数声明调用的顺序
sayHello();
sayHello2();
function sayHello()
{
    function sayHello2()
    {
        echo "say Hello2" . PHP_EOL;
    }
    echo "Say Hello" . PHP_EOL;
}

// 3、可变函数
function sayHello3()
{
    echo "say hello 3" . PHP_EOL;
}

sayHello3();
$v = "sayHello3";
$v();

// 4、匿名函数
//function functionName ()
$x = function() {
    echo "function";
};
$x();

