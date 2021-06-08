<?php
/**
 * User: GetcharZp
 * Date: 2021/5/17 0:14
 */

// 1、定义两个类在 index.php 中通过 spl_autoload_register() 来自动加载类文件

//require_once "MyClass.php";
//$myClass = new MyClass();
//$myClass->test();

spl_autoload_register(function ($e) {
//    var_dump("RUN");
    require_once $e . ".php";
});

$myClass = new MyClass();
$myClass1 = new MyClass();
$myClass->test();
$myClass1->test();