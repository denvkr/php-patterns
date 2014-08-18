<?php

namespace DesignPatterns\Structural\Composite;

abstract class Component
{
    protected $name;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @param Component $c
     */
    public abstract function add(Component $c);

    /**
     * @param Component $c
     */
    public abstract function remove(Component $c);

    public abstract function display();
}