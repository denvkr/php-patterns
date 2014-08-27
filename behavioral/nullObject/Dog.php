<?php

namespace DesignPatterns\Behavioral\nullObject;

include_once 'Animal.php';

class Dog implements Animal
{
    public function sound()
    {
        echo "woof\n";
    }
}