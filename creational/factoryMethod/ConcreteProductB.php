<?php

namespace DesignPatterns\Creational\FactoryMethod;

include_once 'ProductInterface.php';

class ConcreteProductB
    implements ProductInterface
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'Product B';
    }
}