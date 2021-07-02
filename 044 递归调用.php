<?php
/**
 * User: GetcharZp
 * Date: 2021/6/21 22:55
 */

/**
 * @param $num int 输入参数
 * @return int
 */
function add($num) {
    static $total = 0; // 静态变量
    if ($num > 0) {
        $total += $num; // 7 + 6 + ... + 1
        return add(--$num);
    } else {
        return $total;
    }
}

function test() {
    var_dump("test");
    return 1;
}

var_dump(add(7));
var_dump(test());