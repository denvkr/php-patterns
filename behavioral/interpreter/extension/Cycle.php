<?php

namespace DesignPatterns\Behavioral\Interpreter\Extension;

use DesignPatterns\Behavioral\Interpreter as Base;

include_once __DIR__ . '/../Extension.php';

class Cycle
    extends Base\Extension
{
    const LOOPS_LIMIT = 100000;

    protected $loop = 0;

    /**
     * @var Base\Interpreter
     */
    protected $interpreter = null;

    /**
     * @param Base\Interpreter $interpreter
     */
    public function setInterpreter($interpreter)
    {
        $this->interpreter = $interpreter;
    }

    /**
     * @return Base\Interpreter
     */
    public function getInterpreter()
    {
        return $this->interpreter;
    }

    protected function increment()
    {
        $this->loop++;
    }

    protected function reset()
    {
        $this->loop = 0;
    }

    protected function checkLoopsLimit()
    {
        if (self::LOOPS_LIMIT == $this->loop) {
            throw new \Exception('Infinite loop');
        }
    }

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
        $this->setInterpreter($core);

        $expr = $arguments[0];
        $statements = array_slice($arguments, 1);

        while ($this->expr($expr)) {
            foreach ($statements as $statement) {
                $core->calculation($statement);
            }
        }

        $this->reset();
    }

    protected function expr($expr)
    {
        $this->checkLoopsLimit();
        $this->increment();
        $result = $this->getInterpreter()->calculation($expr);
        return $result;
    }
}