<?php

namespace DesignPatterns\Structural\Proxy;

interface MathInterface
{
    /**
     * @param float $x
     * @param float $y
     * @return float
     */
    public function add($x, $y);

    /**
     * @param float $x
     * @param float $y
     * @return float
     */
    public function sub($x, $y);

    /**
     * @param float $x
     * @param float $y
     * @return float
     */
    public function mul($x, $y);

    /**
     * @param float $x
     * @param float $y
     * @return float
     */
    public function div($x, $y);
}