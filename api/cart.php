<?php
class Cart {
    protected $products;
    protected $subtotal;
    protected $order_volume;
    protected $shipping_fee;
    protected $total;


    function __construct($products){
        $this->setProducts($products);
        $this->setSubtotal($products);
        $this->setOrderVolume($products);
        $this->setShippingFee($this->order_volume, $this->subtotal);
        $this->setTotal($this->shipping_fee, $this->subtotal);
    }

    protected function setProducts($arr){
        $this->products = $arr;
    }

    public function getProducts(){
        return  $this->products;
    }

    //SUBTOTAL

    protected function setSubtotal($arr){
        $subtotal = [];
        foreach($arr as $product){
            $subtotal[] = $product->price; 
        }
        $this->subtotal = array_sum($subtotal);
    }

    public function getSubtotal(){
        return  $this->subtotal;
    }
    
    //ORDER VOLUME

    protected function setOrderVolume($arr){
        $products_volume = [];
        foreach($arr as $product){
            $products_volume[] = $product->volume; 
        }
        $this->order_volume = array_sum($products_volume);
    }
    
    public function getOrderVolume(){
        return  $this->order_volume;
    }

    //SHIPPING FEES

    protected function setShippingFee($volume, $subtotal){

        $fee = 0;

        if($volume <= 100){
            $fee = 10;
        } else if ($volume > 100){
            $fee = 50; 
        } else if ($volume > 200){
            $fee = 80;
        } else if ($volume > 300){
            $fee = 120;
        }
    
        if($subtotal >= 200){
            $fee = 0;
        }

        return $this->shipping_fee = $fee;
    }

    public function getShippingFee(){
        return $this->shipping_fee;
    }

    //TOTAL

    protected function setTotal($fee, $subtotal){
        return $this->total = $subtotal + $fee;
    }

    public function getTotal(){
        return $this->total;
    }
}