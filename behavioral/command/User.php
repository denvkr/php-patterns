<?php

namespace DesignPatterns\Behavioral\Command;

include_once 'Calculator.php';
include_once 'CalculatorCommand.php';

class User
{
    /**
     * @var Calculator
     */
    private $calculator;

    /**
     * @var CalculatorCommand[]
     */
    private $commands = [];

    /**
     * @var int
     */
    private $current = 0;

    public function __construct()
    {
    	$this->calculator = new Calculator();
    }

   /**
    * @param int $levels
    */
    public function redo($levels)
    {
        $result = '';

        for ($i = 0; $i < $levels; $i++) {
            if ($this->current < count($this->commands) - 1) {
                $result .= $this->commands[$this->current++]->execute();
            }
        }

        return $result;
    }

   /**
    * @param int $levels
    */
    public function undo($levels)
    {
        $result = '';

        for ($i = 0; $i < $levels; $i++) {
            if ($this->current > 0) {
                $result .= $this->commands[--$this->current]->unExecute();
            }
        }

        return $result;
    }

   /**
    * @param string $operator
    * @param mixed $operand
    *
    * @return string
    */
    public function compute($operator, $operand)
    {
        $command = new CalculatorCommand($this->calculator, $operator, $operand);
        $result = $command->execute();

        $this->commands[] = $command;
        $this->current++;

        return $result;
    }
}