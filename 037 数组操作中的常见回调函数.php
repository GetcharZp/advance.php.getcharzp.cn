<?php
/**
 * User: GetcharZp
 * Date: 2021/5/28 21:55
 */

// array_map 为数组的每个元素应用回调函数
//$arr2 = array('name' => 1, 'age' => 23);
//function toDouble($n)
//{
//    return $n * 2;
//}
//var_dump(array_map("toDouble", $arr2));

// array_filter 用回调函数过滤数组中的单元
//$arr = array(1, 2, 3, 4, 5);
//function odd($n)
//{
//    return $n & 1;
//}
//var_dump(array_filter($arr, "odd"));

// array_walk 使用用户自定义函数对数组中的每个元素做回调处理
//$arr2 = array('name' => 1, 'age' => 23);
//function change(&$value, $key)
//{
//    $value = $key . ":" . $value;
//}
//
//array_walk($arr2, "change");
//var_dump($arr2);

// usort 使用用户自定义的比较函数对数组中的值进行排序
$arr =   [
    [ 'id' => 0 ],
    [ 'id' => 3 ],
    [ 'id' => 2 ],
    [ 'id' => 1 ],
];
function cmp($a, $b) {
//    return $a['id'] - $b['id'];
    return $b['id'] - $a['id'];
}

usort($arr, "cmp");
var_dump($arr);