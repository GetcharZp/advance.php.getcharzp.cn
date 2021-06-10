<?php
/**
 * User: GetcharZp
 * Date: 2021/6/10 20:17
 */

// 创建一个真彩色的图像
$image = imagecreatetruecolor(50, 25);

// 填背景色
$write = imagecolorallocate($image, 255, 255, 255);
imagefill($image, 0, 0, $write);

// 填验证码
$red = imagecolorallocate($image, 255, 0, 0);
// 生成验证码
$str = "0123456789";
$ans_str = "";
for ($i = 0; $i < 6; ++ $i) {
    $ans_str .= $str[rand(0, strlen($str))];
}
// 将字符串填写到图像资源中
imagestring($image, 1, 0, 0, $ans_str, $red);

imagepng($image, 'code.png');
imagedestroy($image);


