<?php
/**
 * User: GetcharZp
 * Date: 2021/5/28 9:13
 */

$arr1 = array("name" => "GetcharZp", "age" => 23, "xx" => 23);
$arr2 = array("name1" => "A-zero", "age" => 24);
$arr_index = array(21, 22, 11, 0, 222, 11);
$arr_index2 = array(122, 22, 111, 0, 1, 11);

//array_count_values — 统计数组中所有的值
//var_dump(array_count_values($arr1));
//var_dump(array_count_values($arr_index));

//array_flip — 交换数组中的键和值
//var_dump(array_flip($arr1));

//array_merge — 合并一个或多个数组
//var_dump(array_merge($arr1, $arr2));

//array_multisort — 对多个数组或多维数组进行排序(索引数组)
//array_multisort($arr_index, SORT_DESC);
//var_dump($arr_index);
//array_multisort($arr_index, $arr_index2);
// array(21, 22, 11, 0, 222, 11);
// 3-5-2-0-1
//var_dump($arr_index);
// array(122, 22, 111, 0, 1, 11);
// 0-11-111-122-1
//var_dump($arr_index2);

//array_pad — 以指定长度将一个值填充进数组
//var_dump(array_pad($arr_index, 10, "22"));

//array_pop — 弹出数组最后一个单元(出栈)
//array_pop($arr_index);
//var_dump($arr_index);

//array_push — 将一个或多个单元压入数组的末尾(入栈)
//array_push($arr_index, 12);
//var_dump($arr_index);

//array_rand — 从数组中随机(伪随机)取出一个或多个单元(key)
//var_dump(array_rand($arr_index, 2));

//array_keys — 返回数组中部分的或所有的键名
//var_dump(array_keys($arr1, ));
//var_dump(array_keys($arr1, "GetcharZp"));

//array_values — 返回数组中所有的值
//var_dump(array_values($arr1));

//count — 计算数组中的单元数目，或对象中的属性个数
//var_dump(count($arr_index));

//sort — 对数组排序(索引数组)
//sort($arr_index);
//var_dump($arr_index);

