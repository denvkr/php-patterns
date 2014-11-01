<?php

namespace DesignPatterns\More\Registry;

final class Registry
{
    protected static $variable = [];

    /**
     * @param string $name
     * @param mixed $value
     */
    public static function set($name, $value)
    {
        self::$variable[$name] = $value;
    }

    /**
     * @param string $name
     * @return mixed
     */
    public static function get($name)
    {
        return self::$variable[$name];
    }
}