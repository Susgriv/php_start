<?php
$name = readline("«Как вас зовут?» \n");
$taskCount = (int)readline("Сколько задачь у вас запланированно на сегодня? \n");
$task = "«Какая задача стоит перед вами сегодня?» \n";
$time = "«Сколько примерно времени эта задача займет?» \n";

$result = '';
$count = 0;
$sum = 0;

while ($count < $taskCount) {
    $question = readline($task);
    $fullTime = (int)readline($time);
    $result = $result . "- {$question} ({$fullTime}ч)\n";
    $sum += $fullTime;
    $count++;
}
echo "{$taskCount}, сегодня у вас запланировано 3 приоритетных задачи на день: \n";
echo $result;
echo "Примерное время выполнения плана = ({$sum}ч)";