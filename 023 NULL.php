<?php
/**
 * User: GetcharZp
 * Date: 2021/5/22 21:08
 */

// null NULL

// 1、变量未被赋值
var_dump($a == null);

// 2、赋值的内容为null
$a = null;
var_dump($a == null);

// 3、unset()
$b = "name";
unset($b);
var_dump($b == null);


