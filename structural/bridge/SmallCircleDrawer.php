<?php

namespace DesignPatterns\Structural\Bridge;

include_once 'DrawerInterface.php';

class SmallCircleDrawer implements DrawerInterface
{
    const RADIUS_MULTIPLIER = 0.25;

    /**
     * @param int $x
     * @param int $y
     * @param int $radius
     */
    public function drawCircle($x, $y, $radius)
    {
        echo 'Small circle center = ( '.$x.', '.$y.' ) radius = '.($radius * self::RADIUS_MULTIPLIER) . PHP_EOL;
    }
}