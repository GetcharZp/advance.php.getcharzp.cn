<?php
/**
 * User: GetcharZp
 * Date: 2021/5/15 14:52
 */

// 1、浮点型（也叫浮点数 float，双精度数 double 或实数 real）

// 2、浮点数精度问题，举个栗子 (int)((0.7 + 0.1) * 10) = 8
// 0.099999999999
var_dump((int)((0.7 + 0.1) * 10));

// 3、浮点数比较的方式，求差
var_dump(abs(0.9 - 0.9) < 0.00001);

// 4、转化方式 (float) floatval()
var_dump(floatval("12.21AAaa"));
var_dump(floatval(".1AAaa"));
var_dump((float)1.0);