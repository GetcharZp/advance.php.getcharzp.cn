<?php
/**
 * User: GetcharZp
 * Date: 2021/5/17 0:50
 */

// 1、 __construct() 构造函数，__destruct() 析构函数

class User
{
    private $name;
    private $password;

    public function __construct($name, $password)
    {
        $this->name = $name;
        $this->password = $password;
        var_dump("TEST");
    }

    public function __destruct()
    {
        var_dump("END");
    }

    public function printUser()
    {
        var_dump($this->name);
        var_dump($this->password);
    }
}

$user = new User("GetcharZp", "123456");
$user->printUser();