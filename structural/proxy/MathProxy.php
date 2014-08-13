<?php

namespace DesignPatterns\Structural\Proxy;

include_once 'MathInterface.php';
include_once 'Math.php';

class MathProxy implements MathInterface
{
    /**
     * @var Math
     */
    private $math = null;

    /**
     * @param \DesignPatterns\Structural\Proxy\Math $math
     */
    public function setMath($math)
    {
        $this->math = $math;
    }

    /**
     * @return \DesignPatterns\Structural\Proxy\Math
     */
    public function getMath()
    {
        if ($this->math === null) {
            $this->setMath(new Math());
        }

        return $this->math;
    }

    public function add($x, $y)
    {
        return $x + $y;
    }

    public function sub($x, $y)
    {
        return $x - $y;
    }

    public function mul($x, $y)
    {
        return $this->getMath()->mul($x, $y);
    }

    public function div($x, $y)
    {
        return $this->getMath()->mul($x, $y);
    }
}