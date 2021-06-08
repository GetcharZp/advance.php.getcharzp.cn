<?php
/**
 * User: GetcharZp
 * Date: 2021/5/16 19:23
 */


// 1、类的定义方法
// class Name {}

// 2、类的组成：常量、变量（属性）、函数（方法）
namespace NS {
    class User
    {
        // 变量（属性）
        private $name = "name";
        protected $age = 23;
        public $sex = 1;
        // 常量
        const APP = "appxxx";

        // 函数（方法）
        public function printUser()
        {
            print_r($this->name);
            print_r($this->age);
            print_r($this->sex);
            print_r(self::APP);
        }
    }

// 3、对象创建
    $user = new User();
    print $user->sex;
    $user->printUser();
    var_dump(User::APP);

// 4、类的继承，方法、属性的覆盖，父级方法的访问 parent::
    class Student extends User
    {
        const APP = "XXXxx";
        private $score = 60;
        protected $age = 22;
        public $sex = 0;

        public function printUser()
        {
            parent::printUser();
            var_dump($this->sex);
            var_dump($this->age);
            var_dump($this->score);
        }
    }

    $student = new Student();
    var_dump($student->sex);
    $student->printUser();
    var_dump(Student::APP);

// 5、通过 ::class 来获取一个类的完全限定名称
    var_dump(User::class);
}