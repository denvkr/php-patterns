<?php

namespace DesignPatterns\Behavioral\Strategy;

interface Arithmetic
{
    /**
     * @param int $a
     * @param int $b
     * @return mixed
     */
    public function action($a, $b);
}