<?php
/**
 * User: GetcharZp
 * Date: 2021/5/21 19:34
 */

// 1、什么是重载
// __get()、__set()、__isset() empty($hello-name) isset($hello-name)、__call()
class HelloWorld
{
    public $hello = "hello";
    private $world = "world";

    public function __get($name)
    {
        var_dump($name);
    }

    public function __set($name, $value)
    {
        var_dump($name, $value);
    }

    public function __isset($name)
    {
        var_dump("isset:" . $name);
    }

    public function __call($name, $arguments)
    {
        $arguments = json_encode($arguments);
        echo "$name Not Fount,It's arguments: $arguments";
    }

    public function sayHello()
    {
        echo "Say Hello";
    }
    private function sayWorld()
    {
        echo "Say World";
    }
}

$helloWorld = new HelloWorld();

// 2、属性重载
// __get
echo $helloWorld->hello . PHP_EOL;
echo $helloWorld->world;
echo $helloWorld->name . PHP_EOL;

// __set
$helloWorld->hello = "Hello";
echo $helloWorld->hello . PHP_EOL;
$helloWorld->world = "World";
$helloWorld->name = "Name";
echo PHP_EOL;

var_dump(isset($helloWorld->world));
var_dump(isset($helloWorld->hello));
echo PHP_EOL;


// 3、方法重载
$helloWorld->sayHelloWorld("PHP");

