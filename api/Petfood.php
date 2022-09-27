<?php

include_once __DIR__ . '/product.php';

class PetFood extends Product {
    public $calories;
    public $ingredients;

    function __construct($param){
        parent::__construct($param);
        $this->calories = $param['calories'];
        $this->ingredients = $param['ingredients'];
    }
}

