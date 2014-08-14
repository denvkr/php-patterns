<?php

namespace DesignPatterns\Structural\Flyweight\Elements;

use DesignPatterns\Structural\Flyweight as Base;

include_once realpath(dirname(__FILE__) . '/../Element.php');

class Lithium extends Base\Element
{
    protected $name = 'Lithium';

    protected $atomicNumber = 3;
}