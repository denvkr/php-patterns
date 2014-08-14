<?php

namespace DesignPatterns\Structural\Flyweight\Elements;

use DesignPatterns\Structural\Flyweight as Base;

include_once realpath(dirname(__FILE__) . '/../Element.php');

class Helium extends Base\Element
{
    protected $name = 'Helium';

    protected $atomicNumber = 2;
}