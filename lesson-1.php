<?php
$name = readline("«Как вас зовут?» \n");
$age = readline("«Сколько вам лет?» \n");

print "«Вас зовут {$name}, вам {$age} лет»\n";

$name = readline("«Как вас зовут?» \n");
$task = "«Какая задача стоит перед вами сегодня?» \n";
$time = "«Сколько примерно времени эта задача займет?» \n";

$questionOne = readline($task);
$timeOne = (int)readline($time);
$questionTwo = readline($task);
$timeTwo = (int)readline($time);
$questionThree = readline($task);
$timeThree = (int)readline($time);

$sum = $timeOne + $timeTwo + $timeThree;

echo "{$name}, сегодня у вас запланировано 3 приоритетных задачи на день: \n";
echo "- {$questionOne} ({$timeOne}ч)\n";
echo "- {$questionTwo} ({$timeTwo}ч)\n";
echo "- {$questionThree} ({$timeThree}ч)\n";
echo "Примерное время выполнения плана = ({$sum}ч)";
?>