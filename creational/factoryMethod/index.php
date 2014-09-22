<?php

namespace DesignPatterns\Creational\FactoryMethod;

include_once 'ConcreteCreatorA.php';
include_once 'ConcreteCreatorB.php';

$creators = [
    new ConcreteCreatorA(),
    new ConcreteCreatorB(),
];

for($i = 0; $i < count($creators); $i++){
    $products[] = $creators[$i]->FactoryMethod();
}

$productsName = [];
/** @var CreatorInterface $creator */
foreach ($creators as $creator) {
    $productsName[] = $creator->factoryMethod()->getName();
}

var_dump($productsName); /**
array(2) {
    [0] => string(9) "Product A"
    [1] => string(9) "Product B"
} */