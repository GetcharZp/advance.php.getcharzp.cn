<?php
/**
 * User: GetcharZp
 * Date: 2021/5/22 21:51
 */

// 1、变量定义方式 $
$name = "xxx";

// 2、传值赋值
$name = "xxx";
$name_ = $name;
echo $name . PHP_EOL;
echo $name_ . PHP_EOL;

$name_ = "xxxx";
echo $name . PHP_EOL;
echo $name_ . PHP_EOL;


// 3、引用赋值
$name2 = &$name;
echo $name . PHP_EOL;
echo $name2 . PHP_EOL;

$name = "xxxx";
echo $name . PHP_EOL;
echo $name2 . PHP_EOL;

$name2 = "XXXXX";
echo $name . PHP_EOL;
echo $name2 . PHP_EOL;


// 4、超全局变量（自动全局变量）
//var_dump($GLOBALS);
//var_dump($_GET);
//var_dump($_POST);

// 5、global 关键字
function test()
{
    global $name;
    $name = "123";
}

test();
var_dump($name);

// 6、静态变量 static
function test2()
{
    static $a = 1;
    ++$a;
    echo $a . PHP_EOL;
}

test2();
test2();
