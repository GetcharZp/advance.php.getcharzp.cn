<?php
/**
 * User: GetcharZp
 * Date: 2021/6/8 21:12
 */

// 数据库连接
$dbh = new PDO('mysql:host=localhost;dbname=test', 'root', 'root') or die("数据库连接失败");

// 数据新增
//$sql = "insert foo (name) values ('name5')";
//var_dump($dbh->exec($sql));

// 数据删除
//$sql = "delete from foo where name = 'name5'";
//var_dump($dbh->exec($sql));

// 数据修改
$sql = "update foo set name = 'name3' where id = 3";
var_dump($dbh->exec($sql));

// 数据查询
//$sql = "select * from foo";
//foreach ($dbh->query($sql) as $row ) {
//    var_dump($row);
//}