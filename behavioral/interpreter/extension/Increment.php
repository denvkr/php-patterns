<?php

namespace DesignPatterns\Behavioral\Interpreter\Extension;

use DesignPatterns\Behavioral\Interpreter as Base;

include_once __DIR__ . '/../Extension.php';

class Increment
    extends Base\Extension
{
    /**
     * @param array $arguments
     * @param Base\Interpreter $core
     * @return mixed
     */
    public function calculationArguments(array $arguments, Base\Interpreter $core)
    {
        return $arguments;
    }

    public function execute(array $arguments, Base\Interpreter $core)
    {
        $value = $arguments[0];
        if (is_array($value)) {
            $name = $value['name'];
            $value = $core->getVariable($name, 0);
            $value++;
            $core->setVariable($name, $value);
        }
        else {
            if (! is_numeric($arguments[0])) {
                $value = $core->calculation($arguments[0]);
            }

            $value++;
        }

        return $value;
    }
}