<?php

namespace DesignPatterns\Behavioral\Interpreter\Extension;

use DesignPatterns\Behavioral\Interpreter as Base;

include_once __DIR__ . '/../Extension.php';

class Assignment
    extends Base\Extension
{
    public function calculationArguments(array $arguments, Base\Interpreter $core)
    {
        return array(
            $arguments[0]['name'],
            $core->calculation($arguments[1])
        );
    }

    public function execute(array $arguments, Base\Interpreter $core)
    {
        $core->setVariable($arguments[0], $arguments[1]);
    }
}