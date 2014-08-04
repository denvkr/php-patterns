<?php

namespace DesignPatterns\Creational\Singleton;

class Singleton
{
    /**
     * @var mixed
     */
    protected $value;

    /**
     * @var Singleton
     */
    private static $instance;

    /**
     * @return Singleton
     */
    public static function getInstance()
    {
        if ( empty(self::$instance) ) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __construct()
    {
        //
    }

    private function __clone()
    {
        //
    }

    private function __wakeup()
    {
        //
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