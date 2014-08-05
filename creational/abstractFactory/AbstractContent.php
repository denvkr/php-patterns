<?php

namespace DesignPatterns\Creational\AbstractFactory;

abstract class AbstractContent
{
    /**
     * @return string
     */
    abstract function content();

    public function __toString()
    {
        return $this->content();
    }
}