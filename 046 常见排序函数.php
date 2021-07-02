<?php
/**
 * User: GetcharZp
 * Date: 2021/6/28 22:51
 */

$arr = [12, 32, 123, 22, 123123, 1];
// sort rsort 引用
sort($arr);
rsort($arr);

// asort arsort
$arr = ['name' => 'getcharZp', 'hobby' => 'game'];
asort($arr);
arsort($arr);

// ksort krsort
$arr = ['hobby' => 'game', 'name' => 'getcharZp'];
krsort($arr);
ksort($arr);
print_r($arr);
