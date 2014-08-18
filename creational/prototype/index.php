<?php

namespace DesignPatterns\Creational\Prototype;

include_once 'Prototype.php';

$objectA = new Prototype();
$objectA->setValue(1);
$objectB = $objectA::prototype();

echo 'Equal : ' . ($objectA->getValue() == $objectB->getValue()) ? 'yes' : 'no';
echo PHP_EOL;

$objectB->setValue(20);

echo 'Equal : ' . ($objectA->getValue() == $objectB->getValue()) ? 'yes' : 'no';
echo PHP_EOL;

