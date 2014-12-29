<?php namespace App\Models;

class CartEntry {

    private $product = null;
    private $amount = 0;

    function __construct(Product $product, $amount)
    {
        $this->product = $product;
        $this->amount = $amount;
    }

    public function SetProduct(Product $product)
    {
        $this->product = $product;
    }

    public function GetProduct()
    {
        return $this->product;
    }

    public function SetAmount($amount)
    {
        $this->amount = $amount;
    }

    public function GetAmount()
    {
        return $this->amount;
    }

    public function GetTotalPrice()
    {
        return $this->amount * $this->product->price;
    }

    public function Increment()
    {
        $this->amount++;
    }
}