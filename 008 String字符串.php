<?php
/**
 * User: GetcharZp
 * Date: 2021/5/15 16:27
 */

// 1、一个字符串 string 就是由一系列的字符组成

// 2、字符串定义的方法：单引号 、双引号、heredoc语法结构 、nowdoc语法结构
$temp = 123;
$a = 'abcd$temp' . $temp;
$b = "abcd$temp";
$c = "abcd" . $temp;

// heredoc
$d = <<<EOF
123123321
3213123 123
$temp
EOF;
// nowdoc
$e = <<<'EOF'
12312312313321
12312412414
$temp
EOF;

var_dump($a, $b, $c, $d, $e);

// 3、substr() strpos() strlen() substr_replace() strtolower() strtoupper()
var_dump(substr($a, 0, 4));
var_dump(strpos($a, "a") === false);
var_dump(0 === false);
var_dump(strlen($a));
var_dump(substr_replace($a, "zxy", 2, 0));
var_dump(substr_replace($a, "zxy", 2, 2));
var_dump(strtolower("asdfAASDF"));
var_dump(strtoupper("asdfAASDF"));

// 4、转换成字符串
// (string) strval()

// 5、序列化serialize() 反序列化unserialize()
$a = array(12, 23);
var_dump(serialize($a));
var_dump(unserialize(serialize($a)));

// 6、字符串转换为数值
var_dump(intval("12.3asdf"));
var_dump(floatval("12.3asdf"));

// 7、ord() chr()
var_dump(ord("a"));
var_dump(chr(97));
