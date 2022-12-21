<?php
$wishes = [
    'счастья',
    'здоровья',
    'любви',
    'благополучия',
    'воображения',
    'терпения',
];

$epithets = [
    'безконечного',
    'крепкого',
    'безудержного',
    'космического',
];

$generalArray = [];
$name = (string)readline("Как вас зовут? \n");
$maxValue = min(count($wishes), count($epithets));
$number = min($maxValue, (int)readline("Кол-во поздравлений (не больше {$maxValue}\n"));
$randWishes = array_rand($wishes, $number);
$randEpithets = array_rand($epithets, $number);

for ($i = 0; $i < $number; $i++) {
    $generalArray[] = $wishes[$randWishes[$i]] . ' ' . $epithets[$randEpithets[$i]];
}

$lastArrayItem = array_pop($generalArray);
$str = implode(", ", $generalArray);

echo "Дорогой {$name} , от всего сердца поздравляю тебя с днем рождения, желаю {$str} и {$lastArrayItem}";