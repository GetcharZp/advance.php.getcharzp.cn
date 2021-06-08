<?php
/**
 * User: GetcharZp
 * Date: 2021/5/22 14:37
 */

// clone 关键字 __clone 魔术方法
//$a = $b;
//$a = clone $b;
class A
{
    public $name;

    public function __clone()
    {
        echo "CLONE" . PHP_EOL;
    }
}
$a = new A;
$a->name = "NAME";
$b = $a; // 赋值
$c = clone $a;

$b->name = "BNAME";
$a->name = "ANAME";

echo $a->name . PHP_EOL;
echo $b->name . PHP_EOL;
echo $c->name . PHP_EOL;


