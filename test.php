<?php
/**
 * Created by PhpStorm.
 * User: yc
 * Date: 2018/4/25
 * Time: 16:21
 */

$array = ['a'=>'b','b'=>'c'];
$str1 = json_encode($array);
$str2 = json_encode($str1);
print_r($str2);
echo "\r\n";
$jstr1 = json_decode($str2);
print_r($jstr1);
echo "\r\n";
$jstr2 = json_decode($jstr1);
print_r($jstr2);