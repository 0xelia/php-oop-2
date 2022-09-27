<?php
class Cart {
    protected $products;

    function __construct($products){
        $this->setProducts($products);
    }

    protected function setProducts($arr){
        $this->products = $arr;
    }

    public function getProducts(){
        return  $this->products;
    }
}