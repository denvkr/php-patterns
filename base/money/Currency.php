<?php

namespace DesignPatterns\Base\Money;

/**
 * @author Mathias Verraes
 */
class Currency
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var array
     */
    private static $currencies;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        if(!isset(static::$currencies)) {
            static::$currencies = require __DIR__.'/currencies.php';
        }

        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param Currency $other
     * @return bool
     */
    public function equals(Currency $other)
    {
        return $this->name === $other->name;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getName();
    }
}