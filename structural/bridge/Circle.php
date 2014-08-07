<?php

namespace DesignPatterns\Structural\Bridge;

include_once 'DrawerInterface.php';
include_once 'Shape.php';

class Circle extends Shape
{
    /**
     * @var int
     */
    private $x;

    /**
     * @var int
     */
    private $y;

    /**
     * @var int
     */
    private $radius;

    /**
     * @param int $x
     * @param int $y
     * @param int $radius
     * @param DrawerInterface $drawer
     */
    public function __construct($x, $y, $radius, DrawerInterface $drawer)
    {
        parent::__construct($drawer);
        $this->x = $x;
        $this->y = $y;
        $this->radius = $radius;
    }

    public function draw()
    {
        $this->drawer->drawCircle($this->x, $this->y, $this->radius);
    }

    public function enlargeRadius($multiplier)
    {
        $this->radius *= $multiplier;
    }
}