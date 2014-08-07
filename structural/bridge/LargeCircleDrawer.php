<?php

namespace DesignPatterns\Structural\Bridge;

include_once 'DrawerInterface.php';

class LargeCircleDrawer implements DrawerInterface
{
    const RADIUS_MULTIPLIER = 10;

    /**
     * @param int $x
     * @param int $y
     * @param int $radius
     */
    public function drawCircle($x, $y, $radius)
    {
        echo 'Large circle center = ( '.$x.', '.$y.' ) radius = '.($radius * self::RADIUS_MULTIPLIER) . PHP_EOL;
    }
}