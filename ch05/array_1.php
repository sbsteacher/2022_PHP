<?php
//배열을 왜 쓰는가?
//한 공간에 많은 자료를 담기 위해서 사용을 하는 것. > 배열
//한 공간에 하나의 자료를 담는게 뭐다? 변수

$arr = [300, 400];
$arr2 = array(100, 200);

$arr[0] = 150;

print "arr[0]: " . $arr[0] . "<br>";
print "arr[1]: " . $arr[1] . "<br>";

print "arr2[0]: " . $arr2[0] . "<br>";
print "arr2[1]: " . $arr2[1] . "<br>";

print "---------------------<br>";

$keyArr = ["a" => 300, "b" => 400];

$keyArr["a"] = 500;

print $keyArr["a"];