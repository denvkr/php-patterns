<?php

namespace DesignPatterns\Creational\Singleton;

include_once 'Singleton.php';

$objectA = Singleton::getInstance();
$objectA->setValue(1);

$objectB = Singleton::getInstance();
$objectB->setValue(2);

echo 'Equal : ' . ($objectA->getValue() == $objectB->getValue()) ? 'yes' : 'no';
echo PHP_EOL;

// Fatal error: Call to private method
// $objectC = new Singleton();

