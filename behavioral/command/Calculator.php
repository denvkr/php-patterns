<?php

namespace DesignPatterns\Behavioral\Command;

class Calculator
{
    /**
     * @var int
     */
    private $curr = 0;

    /**
     * @param string $operator
     * @param int $operand
     *
     * @return string text message
     */
    public function operation($operator, $operand)
    {
        switch($operator)
        {
            case '+':
                $this->curr += $operand;
                break;

            case '-':
                $this->curr -= $operand;
                break;

            case '*':
                $this->curr *= $operand;
                break;

            case '/':
                $this->curr /= $operand;
                break;
        }

        return "result = $this->curr (after $operator with $operand)\n";
    }
}