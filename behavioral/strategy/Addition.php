<?php

namespace DesignPatterns\Behavioral\Strategy;

include_once 'Arithmetic.php';

class Addition implements Arithmetic
{
    /**
     * @param int $a
     * @param int $b
     * @return int
     */
    public function action($a, $b)
    {
        return $a + $b;
    }
}