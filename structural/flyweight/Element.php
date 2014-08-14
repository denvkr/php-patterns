<?php

namespace DesignPatterns\Structural\Flyweight;

/**
 * Flyweight
 */
abstract class Element
{
    protected $name = '';

    protected $atomicNumber = 0;

    public function info()
    {
        return "Name '{$this->name}', atomic number {$this->atomicNumber}";
    }
}