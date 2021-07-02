<?php
/**
 * User: GetcharZp
 * Date: 2021/6/20 23:11
 */

$ch = curl_init('http://localhost:8100?name=GetcharZp');

//curl_setopt($ch, CURLOPT_URL, 'http://localhost:8100?name=GetcharZp');

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, ['age' => 23]);

// 发送put请求
//curl_setopt($ch, CURLOPT_PUT, true);

// 发送delete请求
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");

curl_exec($ch);
curl_close($ch);


