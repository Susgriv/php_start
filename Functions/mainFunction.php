<?php

/** Functions_1
 * @param int $num
 * @return string "Четное или нечетное"
 */
$eveNotEven = fn(int $num): string => (($num % 2) == 0) ? "Число {$num} \"Четное\"" : "Число {$num} \"Нечетное\"";



/**
 * @param array $x
 * @return array min, max, avg
 */
$result = function (array $x): array
{
    return [
        'min' => min($x),
        'max' => max($x),
        'sum' => array_sum($x) / count($x),
    ];
};

/**
 * @param string $title Искомое название
 * @param array $arr Массив значений
 * @return bool резальтат true or false
 */
function recursion(string $title, array $arr): bool
{
    foreach ($arr as $item) {
        if (is_array($item)) {
            if (recursion($title, $item)) {
                return true;
            }
        } elseif ($title === $item) {
            return true;
        }
    }
    return false;
}