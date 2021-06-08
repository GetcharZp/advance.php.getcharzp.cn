<?php
/**
 * User: GetcharZp
 * Date: 2021/5/14 22:48
 */

// other: 指令分隔符 ;

// 1、 //
// var_dump("RUN");  var_dump("RUN"); var_dump("RUN");

// 2、 #
# var_dump("RUN");  var_dump("RUN"); var_dump("RUN");

// 3、/* */
/*
var_dump("RUN");
var_dump("RUN");
var_dump("RUN");
*/

// 4、/**  */ 文档注释
/**
 * @param $a integer
 * @param $b integer
 * @return mixed
 */
function add($a, $b)
{
    return $a + $b;
}

var_dump(add(12, 23));