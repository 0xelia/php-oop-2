<?php
//estendere classe product per le categorie di prodotti
//classi per categorie: giochi, cibo, vestiti


include_once __DIR__ . '/api/Petfood.php';
include_once __DIR__ . '/db/products_data.php';
include_once __DIR__ . '/api/toy.php';


$food_1 = new PetFood($data_food_1);
$food_2 = new PetFood($data_food_2);
$toy_1 = new PetToy($data_toy_1);
$toy_2 = new PetToy($data_toy_2);
var_dump($toy_1, $toy_2);