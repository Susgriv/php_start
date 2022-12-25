<?php
//require 'mainFunction.php';

$arrayNum = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
$result = function (array $x): array
{
    return [
        'min' => min($x),
        'max' => max($x),
        'sum' => array_sum($x) / count($x),
    ];
};
print_r($result($arrayNum));