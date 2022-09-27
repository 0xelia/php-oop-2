<?php
//estendere classe product per le categorie di prodotti
//classi per categorie: giochi, cibo, vestiti


include_once __DIR__ . '/api/Petfood.php';
include_once __DIR__ . '/db/products_data.php';
include_once __DIR__ . '/api/toy.php';
include_once __DIR__ . '/api/petcare.php';
include_once __DIR__ . '/api/cart.php';

$products = 
[
    new PetFood($data_food_1),
    new PetFood($data_food_2),
    new PetToy($data_toy_1),
    new PetToy($data_toy_2),
    new PetCare($data_care_1),
    new PetCare($data_care_2),
];

$cart = new Cart($products);

