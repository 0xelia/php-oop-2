<?php

class Product {
    public $name;
    public $description;
    public $brand;
    public $price;
    protected $poster;
    public $weight;
    public $volume;
    public $categories;

    // function __construct($name, $poster, $description, $brand, $categories, $weight, $volume, $price = 0)
    function __construct($param)
    {
        $this->name = $param['name'];
        $this->price = $param['price'];
        $this->poster = $this->setPoster($param['poster']);
        $this->description = $param['description'];
        $this->brand = $param['brand'];
        $this->categories = $param['categories'];
        $this->weight = $param['weigth'];
        $this->volume = $param['volume'];
    }

    public function setPoster($poster){
        if($poster == '' || $poster == null){
            return 'https://imgs.search.brave.com/uNkVw-sFvVp-nqZtRCbA1J5lwfZrBRSF3dbzeFFRtDA/rs:fit:1200:1200:1/g:ce/aHR0cHM6Ly9qdWRn/ZW1lLmltZ2l4Lm5l/dC9wZXQtY29zdHVt/ZS1jZW50ZXIvMTYw/NTE0Njc3NF9fRDND/OTNGQTQtNDlCOS00/RTE0LUJENEMtNjQz/RjhGQTU2NTA4X19v/cmlnaW5hbC5qcGVn/P2F1dG89Zm9ybWF0';
        } else {
            return $poster;
        }
    }

    public function setPrice($price){
        //price setter
    }
}