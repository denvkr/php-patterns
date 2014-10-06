<?php

namespace DesignPatterns\Structural\TemplateMethod;

include_once 'Kernel.php';

class ConcreteClassA extends Kernel
{
    /**
     * @param mixed $params
     * @return array
     */
    function init($params)
    {
        return [
            'initialized' => __METHOD__,
        ];
    }

    /**
     * @return array
     */
    function check()
    {
        return [
            'checked' => __METHOD__,
        ];
    }

    /**
     * @return array
     */
    function end()
    {
        return [
            'finally' => __METHOD__,
        ];
    }
}