<?php

namespace DesignPatterns\Creational\Prototype;

class Prototype
{
    /**
     * @var mixed
     */
    protected $value;

    /**
     * @return Prototype
     */
    public function prototype()
    {
        return clone $this;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
}