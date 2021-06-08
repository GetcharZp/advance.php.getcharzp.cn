<?php
/**
 * User: GetcharZp
 * Date: 2021/5/16 14:59
 */

// 1、创建数组的方式 array() []、数组值的获取方式
// $a[0] = 12
// $a[1] = 21
// 索引数组
$a = array(12, 21, 22, 10);
$a[1] = "21";
$b = [12, 21];
var_dump($a);

// 关联数组
//$c["name"];
//$c["sex"];
$c = array("name" => "GetcharZp", "sex" => 1);
var_dump($c);

// 1-2、通过foreach() 遍历数组
foreach ($c as $k => $v) {
    var_dump($k, $v);
}

// 1-3 在foreach() 循环中通过引用修改数组 &
foreach ($c as $k => &$v) {
    if ($k == "name") {
        $v = "mmc";
    }
}
unset($v);
var_dump($c);

// 2、数组中键对应值的修改方式
$c["name"] = "A-zero";
var_dump($c);

// 3、键值对的删除方式、数组的删除方式
foreach ($c as $k => $v) {
    if ($k == "name") {
        unset($c[$k]);
    }
}
unset($c);
var_dump($c);

// 4、重新索引 array_values()
foreach ($a as $k => $v) {
    if ($k % 2 == 0) {
        unset($a[$k]);
    }
}
var_dump($a);
$e = array_values($a);
var_dump($e);

// 5、数组的比较 array_diff()
var_dump(array_diff($a, $b));

