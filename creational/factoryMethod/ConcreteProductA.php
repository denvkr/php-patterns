<?php

namespace DesignPatterns\Creational\FactoryMethod;

include_once 'ProductInterface.php';

class ConcreteProductA
    implements ProductInterface
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'Product A';
    }
}