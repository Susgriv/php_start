<?php

class Cart
{
  private array $products = [];

  /**
   * @param Product $product
   * @return void
   */
  public function addProduct(Product $product): void
  {
    $this->products[] = $product;
  }

  /**
   * @param Product $product
   * @return void
   */
  public function removeProduct(Product $product): void
  {
    foreach ($this->products as $key => $val) {
      if ($val === $product) {
        unset($this->products[$key]);
      }
    }
  }

  /**
   * @return float
   */
  public function getPrice(): float
  {
    $price = 0;
    foreach ($this->products as $product) {
      $price += $product->updatePrice();
    }
    return $price;
  }
}