<?php

//require 'mainFunction.php';
$box = [
    [
        0 => 'Тетрадь',
        1 => 'Книга',
        2 => 'Настольная игра',
        3 => [
            'Настольная игра',
            'Настольная игра',
        ],
        4 => [
            [
                'Ноутбук',
                'Зарядное устройство'
            ],
            [
                'Компьютерная мышь',
                'Набор проводов',
                [
                    'Фотография',
                    'Картина'
                ]
            ],
            [
                'Инструкция',
                [
                    'Ключ'
                ]
            ]
        ]
    ],
    [
        0 => 'Пакет кошачьего корма',
        1 => [
            'Музыкальный плеер',
            'Книга'
        ]
    ]
];

$itemName = (string)readline("Введите название предмета \n");

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

echo recursion($itemName, $box) ? 'true' : 'false';

/**
 * Хочу признаться сегодня первые два задания делал сам, на третье задание времени не хватило, подсмотрел у вас.
 * Дети заболели времени не было.
 * Посидел и разобрался.
 */