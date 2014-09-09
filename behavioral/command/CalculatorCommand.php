<?php

namespace DesignPatterns\Behavioral\Command;

include_once 'Command.php';
include_once 'Calculator.php';

class CalculatorCommand extends Command
{
    /**
     * @var string
     */
    public $operator;

    /**
     * @var mixed
     */
    public $operand;

    /**
     * @var Calculator
     */
    public $calculator;

    /**
     * @param object $calculator
     * @param string $operator
     * @param mixed $operand
     */
    public function __construct($calculator, $operator, $operand)
    {
        $this->calculator = $calculator;
        $this->operator = $operator;
        $this->operand = $operand;
    }

    /**
     * @return string
     */
    public function execute()
    {
        return $this->calculator->operation($this->operator, $this->operand);
    }

    /**
     * @return string
     */
    public function unExecute()
    {
        return $this->calculator->operation($this->undo($this->operator), $this->operand);
    }

    /**
     * @private
     * @param string $operator
     * @return string
     */
    private function undo($operator)
    {
        switch($operator)
        {
            case '+': $undo = '-'; break;
            case '-': $undo = '+'; break;
            case '*': $undo = '/'; break;
            case '/': $undo = '*'; break;
            default : $undo = ' '; break;
        }

        return $undo;
    }
}