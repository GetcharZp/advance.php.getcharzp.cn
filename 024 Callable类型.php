<?php
/**
 * User: GetcharZp
 * Date: 2021/5/22 21:34
 */

// 1、什么是回调

// 2、举个栗子
function sayHello()
{
    echo "say Hello" . PHP_EOL;
}

function sayHello2($param)
{
    $param();
}

sayHello();
sayHello2("sayHello");
//sayHello2("sayHello1");
