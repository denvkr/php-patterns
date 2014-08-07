<?php

// example from Wikipedia https://ru.wikipedia.org/wiki/%D0%9C%D0%BE%D1%81%D1%82_(%D1%88%D0%B0%D0%B1%D0%BB%D0%BE%D0%BD_%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F)#.D0.9F.D1.80.D0.B8.D0.BC.D0.B5.D1.80_.D0.BD.D0.B0_PHP5

namespace DesignPatterns\Structural\Bridge;

include_once 'Circle.php';
include_once 'SmallCircleDrawer.php';
include_once 'LargeCircleDrawer.php';

$circle = new Circle(5, 10, 10, new LargeCircleDrawer());
$circle->draw(); // Large circle center = ( 5, 10 ) radius = 100
$circle = new Circle(20, 30, 100, new SmallCircleDrawer());
$circle->draw(); // Small circle center = ( 20, 30 ) radius = 25