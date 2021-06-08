<?php
/**
 * User: GetcharZp
 * Date: 2021/5/25 23:04
 */

// 1、生成器的作用

// 2、yield 关键字
$a = range(1, 10);
foreach ($a as $v) {
    print_r($v);
}

function getItem()
{
    //  next()
    for ($i = 1; $i <= 10; ++ $i) {
        yield $i;
    }
}
foreach (getItem() as $v) {
    echo $v . PHP_EOL;
}

