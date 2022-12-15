<?php
$inputNum = (int)readline('Введете число ');

switch ($inputNum % 8) {
    case 1:
        echo "Большой палец\n";
        break;
    case 2:
    case 0:
        echo "Указательный палец\n";
        break;
    case 3:
    case 7:
        echo "Средний палец\n";
        break;
    case 4:
    case 6:
        echo "Безимянный палец\n";
        break;
    default :
        echo "Мизинец палец\n";
        break;
}