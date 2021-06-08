<?php
/**
 * User: GetcharZp
 * Date: 2021/5/25 21:35
 */

// 1、异常的作用

// 1-2、怎样抛出一个异常 throw
//throw new Exception("异常");
//var_dump("RUN");

// 2、使用系统的异常类 try catch
try {
    throw new Exception("异常", 200);
}catch (Exception $e) {
    var_dump($e->getCode());
    var_dump($e->getMessage());
}

// 3、自定义异常类
class MyException extends Exception {
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
try {
    throw new MyException("异常", 2000);
}catch (MyException $e) {
    var_dump($e->getCode());
    var_dump($e->getMessage());
}
