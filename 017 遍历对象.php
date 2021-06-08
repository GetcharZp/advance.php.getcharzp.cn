<?php
/**
 * User: GetcharZp
 * Date: 2021/5/22 10:31
 */

// 对象如何遍历
class A
{
    private $privateName = "privateName";
    protected $protectedName = "protectedName";
    public $publicName = "publicNameValue";
    public $name = "NAME";
}

$a = new A();
foreach ($a as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}