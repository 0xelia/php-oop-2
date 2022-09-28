<?php
require_once __DIR__ . '/product.php';
require_once __DIR__ . '/Objects.php';

class Accessory extends Product{
    use Objects;

    function __construct($param){
        parent::__construct($param);
        $this->setMaterial($param);
        $this->setSize($param);
    }
}