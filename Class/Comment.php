<?php

class Comment
{
  private User $author;
  private Task $task;
  private string $text;

  /**
   * @param User $author
   * @param Task $task
   * @param string $text
   */
  public function __construct(User $author, Task $task, string $text)
  {
    $this->setAuthor($author);
    $this->setTask($task);
    $this->text = $text;
  }

  /**
   * @return User
   */
  private function getAuthor(User $author): User
  {
    return $author;
  }

  /**
   * @param User $author
   */
  private function setAuthor(User $author): void
  {
    $this->author = $this->getAuthor($author);
  }

  /**
   * @return Task
   */
  private function getTask(Task $task): Task
  {
    return $task;
  }

  /**
   * @param Task $task
   */
  private function setTask(Task $task): void
  {
    $this->task = $this->getTask($task);
  }

  /**
   * @return string
   */
  public function getText(): string
  {
    return $this->text;
  }

  /**
   * @param string $text
   */
  public function setText(string $text): void
  {
    $this->text = $text;
  }
}