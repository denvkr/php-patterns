<?php

namespace DesignPatterns\Structural\Flyweight\Elements;

use DesignPatterns\Structural\Flyweight as Base;

include_once realpath(dirname(__FILE__) . '/../Element.php');

class Hydrogen extends Base\Element
{
    protected $name = 'Hydrogen';

    protected $atomicNumber = 1;
}