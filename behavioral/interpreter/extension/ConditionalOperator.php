<?php

namespace DesignPatterns\Behavioral\Interpreter\Extension;

use DesignPatterns\Behavioral\Interpreter as Base;

include_once __DIR__ . '/../Extension.php';

/**
 * Class ConditionalOperator
 * IF condition THEN consequent ELSE alternative
 */
class ConditionalOperator
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
        $condition = $arguments[0];
        $consequent = $arguments[1];
        $alternative = isset($arguments[2]) ? $arguments[2] : false;

        if ($core->calculation($condition)) {
            return $core->calculation($consequent);
        }
        elseif ($alternative) {
            return $core->calculation($alternative);
        }

        return null;
    }
}