<?php
require_once 'User.php';
require_once 'Task.php';
require_once 'Comment.php';
require_once 'TaskService.php';

$user = new User('Ivan', 'jena@jizni.net');
$task = new Task($user, 'Описание №1', 2);
$task = new Task($user, 'Бла бла бла', 1);
$task->setDescription('Новое описание №1-1');
$task->markAsDone();

$task2 = new Task($user, 'sdfsdf', 7);
$task2->setDescription('Task2222222');
$com1 = new Comment($user, $task2, 'qweqwe23');
$task22 = new TaskService();
$task22->addComment($user, $task2, 'left');

$comment = new Comment($user, $task, 'Help me');
$taskCom = new TaskService();
$taskCom->addComment($user, $task, 'qwedas');
print_r($task->comments);

//TaskService::addComment($user, $task, 'Проба первая');
//TaskService::addComment($user, $task, 'Должен попасть в массив');
//
//
//print_r($task->getComments());
//
//foreach ($task->getComments() as $comment) {
//  echo $comment->getText().", ";
//  echo "sdasf" . $comment->getTask()->getDescription().PHP_EOL;
//}