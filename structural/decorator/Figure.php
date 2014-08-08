<?php

namespace DesignPatterns\Structural\Decorator;

abstract class Figure
{
    /**
     * @var string
     */
    protected $name = '';

    /**
     * @return string
     */
    abstract public function getInfo();
}