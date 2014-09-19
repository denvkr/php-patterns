<?php

namespace DesignPatterns\Behavioral\Interpreter\Extension;

use DesignPatterns\Behavioral\Interpreter as Base;

include_once __DIR__ . '/../Extension.php';

class Summation
    extends Base\Extension
{
    public function execute(array $arguments, Base\Interpreter $core)
    {
        return array_sum($arguments);
    }
}