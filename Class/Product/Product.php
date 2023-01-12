<?php

class Product
{
  private string $title;
  private ?float $price;
  private ?array $components;

  /**
   * @param string $title
   * @param float|null $price
   * @param array|null $components
   */
  public function __construct(string $title, ?float $price, ?array $components = [])
  {
    $this->title = $title;
    $this->price = $price;
    $this->components = $components;
  }

  /**
   * @return string
   */
  public function getTitle(): string
  {
    return $this->title;
  }

  /**
   * @return array|null
   */
  public function getComponents(): ?array
  {
    return $this->components;
  }

  /**
   * @param array|null $components
   */
  public function setComponents(?array $components): void
  {
    $this->components[] = $components;
    $this->updatePrice();
  }

  /**
   * @return float|null
   */
  public function updatePrice(): ?float
  {
    $price = 0;
    foreach ($this->components as $component) {
      $price += $component->updatePrice();
    }
    $this->price += $price;
    return $this->price;
  }
}