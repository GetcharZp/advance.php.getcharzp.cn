<?php
/**
 * User: GetcharZp
 * Date: 2021/5/15 14:13
 */

// 1、integer 是集合 ? = {..., -2, -1, 0, 1, 2, ...} 中的某个数。

// 2、最大的整数、最小的整数
var_dump(PHP_INT_MAX);
var_dump(PHP_INT_MIN);

// 3、转化为整数的方式 (int) (integer) intval()
var_dump((int)false);
var_dump((int)"fff");
var_dump((int)"12.21fff");
var_dump((int)12.21);
// 上取整
var_dump(ceil(12.0000021));
var_dump((int)floor(12.0000021));
var_dump(intval("12.21fff"));
