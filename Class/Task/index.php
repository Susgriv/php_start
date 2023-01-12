<?php
require_once 'User.php';
require_once 'Task.php';
require_once 'Comment.php';
require_once 'TaskService.php';

$user = new User('Ivan', 'jena@jizni.net');
$task = new Task($user, 'Описание №1', 2);

TaskService::addComment($user, $task, 'Проба первая');
TaskService::addComment($user, $task, 'Должен попасть в массив');

foreach ($task->getComments() as $comment) {
  echo "Комментарий: " . $comment->getText() . ", ";
  echo "Пользователь: " . $user->getUsername() . PHP_EOL;
  echo "Задача: " . $comment->getTask()->getDescription() . PHP_EOL;
}