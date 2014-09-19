<?php

namespace DesignPatterns\Behavioral\Interpreter\Extension;

use DesignPatterns\Behavioral\Interpreter as Base;

include_once __DIR__ . '/../Extension.php';

class False
    extends Base\Extension
{
    public function init(Base\Interpreter $core)
    {
        $core->setVariable('false', false);
    }

    public function execute(array $arguments, Base\Interpreter $core)
    {
        return ($arguments[0] == false);
    }
}