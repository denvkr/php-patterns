<?php

namespace DesignPatterns\Structural\Decorator;

include_once 'Void.php';
include_once 'Circle.php';
include_once 'Bar.php';

$figures = new Bar(
    new Circle(
        new Bar(
            new Circle(
                new Void()
            )
        )
    )
);
echo $figures->getInfo() . PHP_EOL;
// Bar Circle Bar Circle