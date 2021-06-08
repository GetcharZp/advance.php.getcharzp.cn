<?php
/**
 * User: GetcharZp
 * Date: 2021/5/14 23:06
 */

// 1、bool值简介，非真(true)即假(false)
//var_dump(TRUE);
//var_dump(false);
//var_dump(3 > 1);

// 2、作用：流程控制
//for ($i = 0; $i < 5; ++$i) {
//    if ($i > 3) {
//        var_dump("I : " . $i);
//    }
//}

// 3、当转换为 boolean 时，以下值被认为是 FALSE：
// 布尔值 FALSE 本身
// 整型值 0（零）
var_dump((bool)0);
// 浮点型值 0.0（零）
var_dump((bool)0.0);
// 空字符串，以及字符串 "0"
var_dump((bool)"");
var_dump((bool)"0");
// 不包括任何元素的数组
// array() []
var_dump((bool)array());
var_dump((bool)[]);
// 特殊类型 NULL（包括尚未赋值的变量）
var_dump((bool)null);
var_dump(boolval(""));

var_dump((bool) "");        // bool(false)
var_dump((bool) 1);         // bool(true)
var_dump((bool) -2);        // bool(true)
var_dump((bool) "foo");     // bool(true)
var_dump((bool) 2.3e5);     // bool(true)
var_dump((bool) array(12)); // bool(true)
var_dump((bool) array());   // bool(false)
var_dump((bool) "false");   // bool(true)

