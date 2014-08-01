<?php

namespace DesignPatterns\Creational\FactoryMethod;

interface CreatorInterface
{
    /**
     * @return ProductInterface
     */
    public function factoryMethod();
}