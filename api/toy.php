<?php
include_once __DIR__ . '/product.php';

class PetToy extends Product {
    public $material;

    function __construct($param){
        parent::__construct($param);
        $this->material = $param['material'];
    }
}