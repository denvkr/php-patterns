<?php

namespace DesignPatterns\Behavioral\Interpreter\Extension;

use DesignPatterns\Behavioral\Interpreter as Base;

include_once __DIR__ . '/../Extension.php';

class Random
    extends Base\Extension
{
    public function execute(array $arguments, Base\Interpreter $core)
    {
        $min = (int)$arguments[0];
        $max = (int)$arguments[1];

        return rand($min, $max);
    }
}