<?php
class Cart {
    protected $products;
    protected $total_price;

    function __construct($products){
        $this->setProducts($products);
        $this->setTotalPrice($products);
    }

    protected function setProducts($arr){
        $this->products = $arr;
    }

    public function getProducts(){
        return  $this->products;
    }

    protected function setTotalPrice($arr){
        $subtotal = [];
        foreach($arr as $product){
            $subtotal[] = $product->price; 
        }
        $this->total_price = array_sum($subtotal);
    }

    public function getTotalPrice(){
        return  $this->total_price;
    }
}