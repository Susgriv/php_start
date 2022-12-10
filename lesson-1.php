<?php
$name = readline("«Как вас зовут?» \n");
$age = readline("«Сколько вам лет?» \n");

print "«Вас зовут {$name}, вам {$age} лет»\n";
?>
<?php
$name = readline("«Как вас зовут?» \n");
$questionOne = readline("«Какая задача стоит перед вами сегодня?» \n");
$timeOne = (int)readline("«Сколько примерно времени эта задача займет?» \n");
$questionTwo = readline("«Какая задача стоит перед вами сегодня?» \n");
$timeTwo = (int)readline("«Сколько примерно времени эта задача займет?» \n");
$questionThree = readline("«Какая задача стоит перед вами сегодня?» \n");
$timeThree = (int)readline("«Сколько примерно времени эта задача займет?» \n");

//$sum = $timeOne + $timeTwo + $timeThree;

echo "{$name}, сегодня у вас запланировано 3 приоритетных задачи на день: \n";
echo "- {$questionOne} ({$timeOne}ч)\n";
echo "- {$questionTwo} ({$timeTwo}ч)\n";
echo "- {$questionThree} ({$timeThree}ч)\n";
//echo "Примерное время выполнения плана = ({$sum}ч)";
echo "Примерное время выполнения плана = (" . ($timeOne + $timeTwo + $timeThree) . "ч)";
?>