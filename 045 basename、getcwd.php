<?php
/**
 * User: GetcharZp
 * Date: 2021/6/27 21:05
 */

// getcwd() 获取当前文件所在的目录
var_dump(getcwd());

// __FILE__ 获取脚本的绝对路径
var_dump(__FILE__);

// basename() 可用于将文件名分割出来/\
var_dump(basename(__FILE__, '.php'));

// dirname() 将路径分割出来
var_dump(dirname(__FILE__));
