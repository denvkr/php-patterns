<?php

namespace DesignPatterns\Structural\Flyweight;

include_once 'ElementFactory.php';
$factory = new ElementFactory();
echo $factory->getElement('H')->info() . PHP_EOL;
echo $factory->getElement('He')->info() . PHP_EOL;
echo $factory->getElement('Li')->info() . PHP_EOL;
echo $factory->getElement('Uuo')->info() . PHP_EOL;