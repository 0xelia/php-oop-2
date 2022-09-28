<?php
include_once __DIR__ . '/product.php';

class PetCare extends Product {
    public $protection;

    function __construct($param){
        parent::__construct($param);
        $this->protection = $param['protection'];
    }
}

