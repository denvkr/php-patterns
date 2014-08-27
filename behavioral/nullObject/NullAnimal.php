<?php

namespace DesignPatterns\Behavioral\nullObject;

include_once 'Animal.php';

class NullAnimal implements Animal
{
    public function sound()
    {
        // nothing
    }
}