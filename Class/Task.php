<?php

class Task
{
  private string $description;
  private DateTime $dateCreated;
  private DateTime $dateUpdate;
  private DateTime $dateDone;
  private bool $isDone = false;
  private int $priority;
  private User $user;

  public array $comments = [];

  /**
   * @param string $description
   * @param int $priority
   * @param User $user
   */
  public function __construct(User $user, string $description = "Пусто", int $priority = null)
  {
    $this->user = $user;
    $this->description = $description;
    $this->priority = $priority;
    $this->setDateCreated(new DateTime());
  }

  /**
   * @return string
   */
  private function getDescription($description): string
  {
    return $description;
  }

  /**
   * @param string $description
   */
  public function setDescription(string $description): void
  {
    $this->description = $this->getDescription($description);
    $this->setDateUpdate(new DateTime());
  }

  /**
   * @return DateTime
   */
  public function getDateCreated(): DateTime
  {
    return $this->dateCreated;
  }

  /**
   * @param DateTime $dateCreated
   */
  public function setDateCreated(DateTime $dateCreated): void
  {
    $this->dateCreated = $dateCreated;
  }

  /**
   * @return DateTime
   */
  private function getDateUpdate($dateUpdate): DateTime
  {
    return $dateUpdate;
  }

  /**
   * @param DateTime $dateUpdate
   */
  public function setDateUpdate(DateTime $dateUpdate): void
  {
    $this->dateUpdate = $this->getDateUpdate($dateUpdate);
  }

  /**
   * @return DateTime
   */
  private function getDateDone($dateDone): DateTime
  {
    return $dateDone;
  }

  /**
   * @param DateTime $dateDone
   */
  public function setDateDone(DateTime $dateDone): void
  {
    $this->dateDone = $this->getDateDone($dateDone);
  }

  /**
   * @return void
   */
  public function markAsDone(): void
  {
    $this->setIsDone();
    $this->setDateUpdate(new DateTime());
    $this->setDateDone(new DateTime());
  }

  /**
   * @return bool
   */
  public function getIsDone(): bool
  {
    return $this->isDone;
  }

  /**
   * @param bool
   */
  private function setIsDone(): void
  {
    $this->isDone = true;
  }

  /**
   * @return int
   */
  public function getPriority(): int
  {
    return $this->priority;
  }

  /**
   * @param int $priority
   */
  public function setPriority(int $priority): void
  {
    $this->priority = $priority;
  }

  /**
   * @return User
   */
  public function getUser(): User
  {
    return $this->user;
  }

  /**
   * @param User $user
   */
  public function setUser(User $user): void
  {
    $this->user = $user;
  }

  /**
   * @return array
   */
  public function getComments(): array
  {
    return $this->comments;
  }

  /**
   * @param array $comments
   */
  public function setComments(array $comments): void
  {
    $this->comments = $comments;
  }


}