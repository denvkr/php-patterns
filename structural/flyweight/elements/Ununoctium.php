<?php

namespace DesignPatterns\Structural\Flyweight\Elements;

use DesignPatterns\Structural\Flyweight as Base;

include_once realpath(dirname(__FILE__) . '/../Element.php');

class Ununoctium extends Base\Element
{
    protected $name = 'Ununoctium';

    protected $atomicNumber = 118;
}