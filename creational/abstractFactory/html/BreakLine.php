<?php

namespace DesignPatterns\Creational\AbstractFactory\Html;

use DesignPatterns\Creational\AbstractFactory as Base;

include_once realpath(dirname(__FILE__) . '/../AbstractParagraph.php');

class BreakLine extends Base\AbstractBreakLine
{
    /**
     * @return string
     */
    function content()
    {
        return "<br />" . PHP_EOL;
    }
}