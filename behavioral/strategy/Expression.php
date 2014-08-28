<?php

namespace DesignPatterns\Behavioral\Strategy;

include_once 'Arithmetic.php';

class Expression
{
    /**
     * @var int
     */
    private $a = 0;

    /**
     * @var int
     */
    private $b = 0;

    /**
     * @var Arithmetic
     */
    private $strategy;

    /**
     * @param int $a
     * @param int $b
     */
    function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    /**
     * @param Arithmetic $strategy
     */
    public function setStrategy(Arithmetic $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * @return mixed
     */
    public function solve()
    {
        return $this->strategy->action($this->a, $this->b);
    }
}