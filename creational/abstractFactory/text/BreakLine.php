<?php

namespace DesignPatterns\Creational\AbstractFactory\Text;

use DesignPatterns\Creational\AbstractFactory as Base;

include_once realpath(dirname(__FILE__) . '/../AbstractParagraph.php');

class BreakLine extends Base\AbstractBreakLine
{
    /**
     * @return string
     */
    function content()
    {
        return PHP_EOL;
    }
}