<?php
/**
 * User: GetcharZp
 * Date: 2021/5/28 20:32
 */

// openssl_get_cipher_methods() 获取可加密的算法
//var_dump(openssl_get_cipher_methods());

// aes-128-cbc
// openssl_cipher_iv_length("aes-128-cbc") 获取指定算法的初始向量长度
//var_dump(openssl_cipher_iv_length("aes-128-cbc"));

$key = "test";
// openssl_encrypt() 数据加密
// lH6Pn+dDV2WDE4R1t4GSEQ==
//var_dump(openssl_encrypt("123", "aes-128-cbc", $key, 0, '1234567812345678'));

// openssl_decrypt() 数据解密
var_dump(openssl_decrypt("lH6Pn+dDV2WDE4R1t4GSEQ==", "aes-128-cbc", $key, 0, '1234567812345678'));
