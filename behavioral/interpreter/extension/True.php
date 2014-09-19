<?php

namespace DesignPatterns\Behavioral\Interpreter\Extension;

use DesignPatterns\Behavioral\Interpreter as Base;

include_once __DIR__ . '/../Extension.php';

class True
    extends Base\Extension
{
    public function init(Base\Interpreter $core)
    {
        $core->setVariable('true', true);
    }

    public function execute(array $arguments, Base\Interpreter $core)
    {
        return ($arguments[0] == true);
    }
}