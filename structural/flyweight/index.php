<?php

namespace DesignPatterns\Structural\Flyweight;

include_once 'ElementFactory.php';

$factory = new ElementFactory();
echo $factory->getElement('H')->info() . PHP_EOL;
// Name 'Hydrogen', atomic number 1
echo $factory->getElement('He')->info() . PHP_EOL;
// Name 'Helium', atomic number 2
echo $factory->getElement('Li')->info() . PHP_EOL;
// Name 'Lithium', atomic number 3
echo $factory->getElement('Uuo')->info() . PHP_EOL;
// Name 'Ununoctium', atomic number 118