<?php
/**
 * User: GetcharZp
 * Date: 2021/5/26 21:12
 */

//var_dump($GLOBALS);

//var_dump($_SERVER);

// 纠正：$_REQUEST是包含$_GET、$_POST、$_COOKIE
//var_dump($_GET);
//var_dump($_POST);
//var_dump($_COOKIE);
//var_dump($_REQUEST);

//var_dump($_FILES);
//var_dump($_SESSION);
//var_dump($php_errormsg);
//var_dump($HTTP_RAW_POST_DATA);
//var_dump($http_response_header);
//var_dump($argc);
//var_dump($argv);

var_dump($_ENV);
//var_dump(getenv());


var_dump(md5("123"));
var_dump(date("y-m-d", time() + 7200));