<?php

namespace DesignPatterns\Structural\Proxy;

include_once 'MathInterface.php';

class Math implements MathInterface
{
    public function __construct()
    {
        echo "INIT VERY FAT OBJECT\n";
        sleep(1);
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
        return $x * $y;
    }

    public function div($x, $y)
    {
        return $x / $y;
    }
}