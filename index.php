<?php
/**
 * User: GetcharZp
 * Date: 2021/6/12 23:47
 */

var_dump(isAnagram("rat", "car"));

// 242. 有效的字母异位词
/**
 * @param String $s
 * @param String $t
 * @return Boolean
 */
function isAnagram($s, $t) {
    if (strlen($s) != strlen($t)) {
        return false;
    }
    $mapA = [];
    $mapB = [];
    for ($i = 0; $i < strlen($s); $i ++) {
        if (!isset($mapA[$s[$i]])) {
            $mapA[$s[$i]] = 1;
        } else {
            $mapA[$s[$i]]++;
        }
        if (!isset($mapB[$t[$i]])) {
            $mapB[$t[$i]] = 1;
        } else {
            $mapB[$t[$i]]++;
        }
    }
    foreach ($mapA as $k => $v) {
        if ($mapB[$k] != $v) {
            return false;
        }
    }
    return true;
}

// 205. 同构字符串
/**
 * @param String $s
 * @param String $t
 * @return Boolean
 */
function isIsomorphic($s, $t) {
    $map1 = [];
    $map2 = [];
    for ($i = 0; $i < strlen($s); ++ $i) {
        if (!isset($map1[$s[$i]])) {
            $map1[$s[$i]] = $t[$i];
        } else {
            if ($map1[$s[$i]] != $t[$i]) {
                return false;
            }
        }
        if (!isset($map2[$t[$i]])) {
            $map2[$t[$i]] = $s[$i];
        } else {
            if ($map2[$t[$i]] != $s[$i]) {
                return false;
            }
        }
    }
    return true;
}

// 171. Excel表列序号
/**
 * @param String $columnTitle
 * @return Integer
 */
function titleToNumber($columnTitle) {
    $ans = 0;
    for ($i = 0, $j = strlen($columnTitle) - 1; $i < strlen($columnTitle); ++$i, --$j) {
        $ans += pow(26, $i) * (ord($columnTitle[$j]) - ord('A') + 1);
    }
    return $ans;
}

// 168. Excel表列名称
/**
 * @param Integer $columnNumber
 * @return String
 */
function convertToTitle($columnNumber) {
    $ans = "";
    while ($columnNumber != 0) {
        --$columnNumber;
        $ans .= chr(ord('A') + ($columnNumber % 26));
        $columnNumber = intval($columnNumber / 26);
    }
    return strrev($ans);
}

// 125. 验证回文串
/**
 * @param String $s
 * @return Boolean
 */
function isPalindrome2($s) {
    $s = strtolower($s);
    $ans = "";
    for ($i = 0; $i < strlen($s); ++ $i) {
        if (is_numeric($s[$i]) || ($s[$i] >= 'a' && $s[$i] <= 'z')) {
            $ans .= $s[$i];
        }
    }
    return $ans == strrev($ans);
}

// 67. 二进制求和
/**
 * @param String $a
 * @param String $b
 * @return String
 */
function addBinary($a, $b) {
    $c = 0;
    $i = strlen($a) - 1;
    $j = strlen($b) - 1;
    $ans = "";
    for (; $i >= 0 || $j >= 0; -- $i, -- $j) {
        $a1 = 0;
        $b1 = 0;
        if ($i >= 0) {
            $a1 = $a[$i];
        }
        if ($j >= 0) {
            $b1 = $b[$j];
        }
        $temp = $a1 + $b1 + $c;
        $ans .= $temp % 2;
        $c = intval($temp / 2);
    }
    while ($c != 0) {
        $ans .= $c % 2;
        $c = intval($c / 2);
    }
    return strrev($ans);
}

// 58. 最后一个单词的长度
/**
 * @param String $s
 * @return Integer
 */
function lengthOfLastWord($s) {
    $ans = "";
    $s = rtrim($s, " ");
    for ($i=strlen($s) - 1; $i >= 0; -- $i) {
        if ($s[$i] == " ") {
            break;
        } else {
            $ans .= $s[$i];
        }
    }
    return strlen($ans);
}

// 28. 实现 strStr()
/**
 * @param String $haystack
 * @param String $needle
 * @return Integer
 */
function strStr1($haystack, $needle) {
    if (strlen($needle) == 0) {
        return 0;
    }
    $pos = strpos($haystack, $needle);
    if ($pos === false) {
        return -1;
    }
    return $pos;
}

// 20. 有效的括号
/**
 * @param String $s
 * @return Boolean
 */
function isValid($s) {
    $temp = "";
    for ($i = 0; $i < strlen($s); ++ $i) {
        if ($s[$i] == "[" || $s[$i] == "(" || $s[$i] == "{") {
            $temp .= $s[$i];
        } else {
            if (($s[$i] == "]" && $temp[strlen($temp) - 1] == "[") ||
                ($s[$i] == "}" && $temp[strlen($temp) - 1] == "{") ||
                ($s[$i] == ")" && $temp[strlen($temp) - 1] == "(")) {
                $temp = substr($temp, 0, strlen($temp) - 1);
            } else {
                return false;
            }
        }
    }
    if ($temp == "") {
        return true;
    }
    return false;
}

// 14. 最长公共前缀
/**
 * @param String[] $strs
 * @return String
 */
function longestCommonPrefix($strs) {
    if (count($strs) == 0) {
        return "";
    }
    $ans = $strs[0];
    foreach ($strs as $str) {
        $temp = "";
        for ($i = 0; $i < min(strlen($ans), strlen($str)); ++ $i){
            if ($str[$i] == $ans[$i]) {
                $temp .= $str[$i];
            } else {
                break;
            }
        }
        $ans = $temp;
    }
    return $ans;
}

// 13. 罗马数字转整数
function romanToInt($s) {
    $ans = 0;
    for ($i = 0; $i < strlen($s); ++$i) {
        $romanMap = ['I' => 1, 'V' => 5, 'X' => 10, 'L' => 50, 'C' => 100, 'D' => 500, 'M' => 1000, 'IV' => 4, 'IX' => 9, 'XL' => 40, 'XC' => 90, 'CD' => 400, 'CM' => 900];
        if ($i < strlen($s) - 1 && array_key_exists(substr($s, $i, 2), $romanMap)) {
            $ans += $romanMap[substr($s, $i, 2)];
            ++$i;
        } else {
            $ans += $romanMap[substr($s, $i, 1)];
        }
    }
    return $ans;
}

// 9. 回文数
function isPalindrome($x) {
    return $x == strrev($x);
}

// 7. 整数反转
function reverse($x) {
    $ans = $x >= 0 ? '' : '-';
    $ans .= intval(strrev($x));
    return ($ans > 2147483647 || $ans < -2147483648) ? 0 : $ans;
}

// 2、两数相加
function addTwoNumbers($l1, $l2) {

}

// 1、两数之和
function twoSum($nums, $target) {
    foreach ($nums as $i => $v1) {
        foreach ($nums as $j => $v2) {
            if ($i != $j and $v1 + $v2 == $target) {
                return [$i, $j];
            }
        }
    }
    return [];
}