<?php
/**
 * User: GetcharZp
 * Date: 2021/6/9 0:12
 */
//$f = fopen("index.txt", "r");
//// 文件读取
//$str = fread($f, filesize("index.txt"));
//var_dump($str);
//
//// 文件写入
//$fw = fopen("index2.txt", "w");
//fwrite($fw, "index2.txt");
//
//// 文件复制
//copy("index.txt", 'index3.txt');
//
//// 文件重命名
//rename('index.txt', 'index1.txt');
//
//fclose($f);
//fclose($fw);


$bfr = fopen("index.docx", "rb");
$str = fread($bfr, filesize("index.docx"));
var_dump($str);

$bfw = fopen("index2.docx", "wb");
fwrite($bfw, $str);

fclose($bfr);
fclose($bfw);