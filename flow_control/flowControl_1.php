<?php
$questionText = 'В каком году произошло крещение Руси?';
$badAnswer1 = 810;
$badAnswer2 = 740;
$correctAnswer = 988;

while (true) {
    $question = (int)readline("{$questionText} {$badAnswer1} {$correctAnswer} {$badAnswer2} \n");
    if ($question !== $correctAnswer && $question !== $badAnswer1 && $question !== $badAnswer2) continue;
    if ($question === $badAnswer1 || $question === $badAnswer2) {
        echo "Ответ не верный\n";
        die;
    }
    echo "Вы ответили правельно!!!\n";
    exit;
}

//do {
//    $question = (int)readline("{$questionText} {$badAnswer1} {$correctAnswer} {$badAnswer2} \n");
//} while ($question !== $correctAnswer && $question !== $badAnswer1 && $question !== $badAnswer2);
//
//if ($question === $badAnswer1 || $question === $badAnswer2) {
//    echo "Ответ не верный\n";
//    die;
//}
//
//echo "Вы ответили правельно!!!\n";
//exit;