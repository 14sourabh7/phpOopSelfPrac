<?php

namespace App;

/**
 * Cart class for all cart operations
 */
class Cart
{
    private array $cart;

    public function __construct()
    {
        $this->cart = array();
    }

    /**
     * addToCart
     *This function adds element to cart
     
     * @param Product $product
     * @return void
     */
    public function addToCart(Product $product)
    {
        if (!$this->productExist($product)) {
            $product->quantity = 1;
            array_push($this->cart, $product);
        }
    }

    public function productExist(Product $product)
    {
        foreach ($this->cart as $k => $v) {
            if ($v->id == $product->id) {
                $this->cart[$k]->quantity += 1;
                return true;
            }
        }
        return false;
    }

    public function getCart()
    {
        return $this->cart;
    }
}
