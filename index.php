<?php


include_once __DIR__ . '/api/Petfood.php';
include_once __DIR__ . '/db/products_data.php';
include_once __DIR__ . '/api/toy.php';
include_once __DIR__ . '/api/petcare.php';
include_once __DIR__ . '/api/accessory.php';
include_once __DIR__ . '/api/cart.php';

$order_1 = 
[
    new PetFood($data_food_1),
    new PetFood($data_food_2),
    new PetToy($data_toy_1),
    new PetToy($data_toy_2),
    new PetCare($data_care_1),
    new PetCare($data_care_2),
    new PetFood($data_food_1),
    new PetFood($data_food_2),
    new PetToy($data_toy_1),
    new PetToy($data_toy_2),
    new PetCare($data_care_1),
    new PetCare($data_care_2),
];

$cart = new Cart($order_1);

// var_dump('Order Volume: ' . $cart->getOrderVolume() . 'L');
// var_dump('Subtotal: '. $cart->getSubtotal().'€');
// var_dump('Shipping Fee: '.$cart->getShippingFee().'€');
// var_dump('Total: '. $cart->getTotal().'€');

$acc_1 = new Accessory($data_accessory_1);

/* 
try{
    $acc_1->setPrice(23.00);
} catch(Exception $e){
    echo  'error from index: '.$e->getMessage();
    echo '<br/>';
}
*/ 

var_dump($acc_1);