<?php
//require 'mainFunction.php';
$arrayNum = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

/*
$eveNotEven = function (int $num): string {
    if (($num % 2) == 0) {
        return "Число {$num} \"Четное\"";
    } else {
        return "Число {$num} \"Не четное\"";
    }
};
*/

$eveNotEven = fn(int $num): string => (($num % 2) == 0) ? "Число {$num} \"Четное\"" : "Число {$num} \"Нечетное\"";

$resultEven = array_map($eveNotEven, $arrayNum);

print_r($resultEven);