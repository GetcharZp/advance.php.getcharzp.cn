<?php
/**
 * User: GetcharZp
 * Date: 2021/6/1 19:49
 */
$str = [8, 10, 10, 5, 7, 5, 8, 6, 3, 2, 6, 1, 1];
$ans = array();
//$len = count($str);
//for ($i = 0; $i < $len; ++$i) {
////    for ($j = $i + 1; $j < $len; ++$j) {
////        if ($str[$i] > $str[$j]) {
////            $b = $str[$i];
////            $str[$i] = $str[$j];
////            $str[$j] = $b;
////        }elseif($str[$i] == $str[$j]) {
////            unset($str[$j]);
////        }
////    }
////}
//var_dump($str);
//for ($i = 0; $i < count($str); ++$i) {
//    array_push($ans, $str[$i]);
//    for ($j = $i + 1; $j < count($str);) {
//        if ($str[$i] == $str[$j]) {
//            ++ $j;
//        } else {
//            $i = $j;
//            break;
//        }
//    }
//}
//var_dump($ans);

//for ($i = 1; $i < count($str); $i++) {
//    $tmp = $str[$i];
//    for ($j = $i - 1; $j >= 0; $j--) {
//        if ($tmp < $str[$j]) {
//            $str[$j + 1] = $str[$j];
//            $str[$j] = $tmp;
//        } else {
//            break;
//        }
//    }
//}
//var_dump($str);

for ($i = 0; $i < count($str); ++ $i) {
    $ans[$str[$i]] = 0;
}
$str = [];
for ($i = 0; $i < count($ans); ++ $i) {
    array_push($str, $key);
}
var_dump($str);