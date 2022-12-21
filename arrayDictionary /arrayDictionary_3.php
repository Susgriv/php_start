<?php

$students = [
    'БАП1320' => [
        'Смирнова Христина Потаповна' => 5,
        'Рогозин Даниил Арсениевич' => 3,
        'Золин Владилен Леонтиевич' => 4,
        'Архаткина Владислава Никитевна' => 5,
        'Мещерякова Мария Елизаровна' => 2,
        'Саврасова Фаина Ивановна' => 3,
        'Хромченко Зинаида Николаевна' => 4,
        'Протасова Майя Леонидовна' => 5,
    ],
    'ИТ1720' => [
        'Ябров Тимур Чеславович' => 5,
        'Белорусов Ефрем Изяславович' => 2,
        'Ягода Назар Прохорович' => 3,
        'Ярилова Розалия Серафимовна' => 4,
        'Нырко Платон Вадимович' => 5,
        'Калинин Агап Моисеевич' => 2,
        'Никифоров Юлиан Прокофиевич' => 4,
    ]
];

$average = [];
$droppedOutStudents = [];

foreach ($students as $key => $value) {
    $average[$key] = array_sum($value) / count($value);
    foreach ($value as $student => $grade) {
        if ($grade < 3) {
            $droppedOutStudents[$key][] = $student;
        }
    }
}

$maxValue = max($average);
$academicPerformance = array_keys($average, $maxValue);

print_r($average);
print_r($academicPerformance);
print_r($droppedOutStudents);



