<?php
/**
 * User: GetcharZp
 * Date: 2021/5/23 18:32
 */

// 1、什么是命名空间

// 2、命名空间取名的注意事项 PHP\XXX

// 3、namespace 代码段所处的位置问题
// declare(encoding='utf-8');
//namespace Test;

// 4、在同一个文件中定义多个命名空间
// 4-1
//namespace Test1;
//function foo()
//{
//    echo "test1 foo" . PHP_EOL;
//}
//function foo2()
//{
//    echo "test2 foo2" . PHP_EOL;
//}
//namespace Test2;
//function foo()
//{
//    echo "test2 foo" . PHP_EOL;
//}

// 4-2
namespace Test3 {
    function foo()
    {
        echo "test3 foo" . PHP_EOL;
        echo __NAMESPACE__ . PHP_EOL;
    }
}
namespace Test4 {
    function foo()
    {
        echo "test4 foo" . PHP_EOL;
        echo __NAMESPACE__;
    }
}
namespace TestEnd {

    use function Test3\foo;

    foo();
    \Test4\foo();
}



// 4-补充、怎么使用命名空间
//namespace TestEnd;
//use function Test1\foo;
//use function Test1\foo2;
//foo();
//foo2();
//\Test1\foo2();
//\Test2\foo();

// 5、访问当前命名空间的方法 __NAMESPACE__ namespace
