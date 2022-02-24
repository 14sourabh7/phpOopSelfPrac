<?php

use App\Cart;
use App\Product;

require("vendor/autoload.php");

$cart  = new Cart;

$product1 = new Product(101, "A", 100);
$product2 = new Product(101, "A", 100);
$product3 = new Product(102, "A", 100);
$product4 = new Product(102, "A", 100);
$product5 = new Product(103, "A", 100);

$cart->addToCart($product1);
$cart->addToCart($product2);
$cart->addToCart($product3);
$cart->addToCart($product4);
$cart->addToCart($product5);

echo "<pre>";
print_r($cart->getCart());
echo "</pre>";
