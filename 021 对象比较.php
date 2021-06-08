<?php
/**
 * User: GetcharZp
 * Date: 2021/5/22 15:07
 */

class A
{
    public $name;
}
//==
$a = new A();
$b = new A();
var_dump($a == $b);

$a = new A();
$a->name = "123";
$b = new A();
$b->name = "123";
var_dump($a == $b);

$a = new A();
$a->name = "123";
$b = new A();
var_dump($a == $b);

//===
$a = new A();
$b = new A();
var_dump($a === $b);

$a = new A();
$b = $a;
var_dump($a === $b);

$a = new A();
$b = clone $a;
var_dump($a === $b);


