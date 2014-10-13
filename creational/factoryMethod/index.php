<?php

namespace DesignPatterns\Creational\FactoryMethod;

include_once 'ConcreteCreatorA.php';
include_once 'ConcreteCreatorB.php';

$creators = [
    new ConcreteCreatorA(),
    new ConcreteCreatorB(),
];

foreach ($creators as $creator) {
    echo $creator->factoryMethod()->getName() . PHP_EOL;
} /*
Product A
Product B
*/