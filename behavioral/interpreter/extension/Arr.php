<?php

namespace DesignPatterns\Behavioral\Interpreter\Extension;

use DesignPatterns\Behavioral\Interpreter as Base;

include_once __DIR__ . '/../Extension.php';

class Arr
    extends Base\Extension
{
    public function execute(array $arguments, Base\Interpreter $core)
    {
        return $arguments;
    }
}