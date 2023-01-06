<?php

class TaskService
{
//  public User $author;
//  public Task $task;
//  public string $text;
  public array $comments = [];
//
//  /**
//   * @param User $author
//   * @param Task $task
//   * @param string $text
//   */
//  public function __construct(User $author, Task $task, string $text)
//  {
//    $this->author = $author;
//    $this->task = $task;
//    $this->text = $text;
//  }


  public function addComment(User $author, Task $task, string $text)
  {
    $task->comments = [$author->getUsername()];
    $task->comments = [$task];
    $this->comments = [$text];
//    $author->
  }
}