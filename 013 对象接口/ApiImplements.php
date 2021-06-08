<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2021/5/19
 * Time: 23:36
 */
require_once "api.php";

class ApiImplements implements api
{

    public function printTest()
    {
        // TODO: Implement printTest() method.
        var_dump("TEST");
    }

    public function printApi()
    {
        // TODO: Implement printApi() method.
        var_dump("API");
    }
}