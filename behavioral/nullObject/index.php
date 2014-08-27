<?php

namespace DesignPatterns\Behavioral\nullObject;

include_once 'Animal.php';
include 'Dog.php';
include 'NullAnimal.php';

function doSomething(Animal $animal)
{
    $animal->sound();
}

doSomething(new Dog); // woof
doSomething(new NullAnimal); //