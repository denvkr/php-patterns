<?php

namespace DesignPatterns\Creational\FactoryMethod;

include_once 'CreatorInterface.php';
include_once 'ConcreteProductA.php';

class ConcreteCreatorA
    implements CreatorInterface
{
    /**
     * @return ConcreteProductA
     */
    public function factoryMethod()
    {
        return new ConcreteProductA();
    }
}