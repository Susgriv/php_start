<?php

class User
{
  private string $username;
  private string $email;
  private DateTime $dateCreated;

  /**
   * @param string $username
   * @param string $email
   */
  public function __construct(string $username, string $email)
  {
    $this->username = $username;
    $this->email = $email;
    $this->setDateCreated(new DateTime());
  }

  /**
   * @return string
   */
  public function getUsername(): string
  {
    return $this->username;
  }

  /**
   * @param string $username
   */
  public function setUsername(string $username): void
  {
    $this->username = $username;
  }

  /**
   * @return string
   */
  public function getEmail(): string
  {
    return $this->email;
  }

  /**
   * @param string $email
   */
  public function setEmail(string $email): void
  {
    $this->email = $email;
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
}