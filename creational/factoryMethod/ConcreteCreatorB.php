<?php

namespace DesignPatterns\Creational\FactoryMethod;

include_once 'CreatorInterface.php';
include_once 'ConcreteProductB.php';

class ConcreteCreatorB
    implements CreatorInterface
{
    /**
     * @return ConcreteProductB
     */
    public function factoryMethod()
    {
        return new ConcreteProductB();
    }
}