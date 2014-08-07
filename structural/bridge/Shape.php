<?php

namespace DesignPatterns\Structural\Bridge;

include_once 'DrawerInterface.php';

abstract class Shape
{
    protected $drawer;

    protected function __construct(DrawerInterface $drawer)
    {
        $this->drawer = $drawer;
    }

    abstract public function draw();

    abstract public function enlargeRadius($multiplier);
}