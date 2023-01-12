<?php

include_once 'Product.php';
include_once 'Cart.php';

//Список продуктов
$tv = new Product('Samsung', 34000);
$mouse = new Product('Mouse', 958.55);
$keyboard = new Product('Keyboard', 2458.30);
$mat = new Product('Коврик для мыши', 630);
$monitor = new Product('MSI', 12000);
$systemUnit = new Product('Системный блок', 35000.25);

// Продукты и компоненты
$accessories = new Product('Колонки', 2500, [$mouse, $keyboard, $mat]);
$assembly = new Product('Сборка', 1000, [$systemUnit, $accessories]);

$cart = new Cart();

$cart->addProduct($tv);
$cart->removeProduct($tv);

$cart->addProduct($accessories);
$cart->addProduct($assembly);

/*
 * Третье задание так и не понял. Посмотрел ваш разбор и попытался воспроизвести
 * по памяти. И за одно чуток понял, но все же нужно больше практики и задач. -:(
 */

echo "Полная стоимость корзины - {$cart->getPrice()}$" . PHP_EOL;