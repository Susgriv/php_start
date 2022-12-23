<?php

$num = 10;
$arr = [];
$arr1 = $arr2 = range(1, $num);

shuffle($arr1);
shuffle($arr2);

for ($i = 0; $i < $num; $i++) {
    $arr[] = $arr1[$i] * $arr2[$i];
}

print_r($arr);