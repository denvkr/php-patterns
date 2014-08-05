<?php

namespace DesignPatterns\Creational\AbstractFactory\Html;

use DesignPatterns\Creational\AbstractFactory as Base;

include_once realpath(dirname(__FILE__) . '/../AbstractParagraph.php');

class Paragraph extends Base\AbstractParagraph
{
    /**
     * @return string
     */
    function content()
    {
        return '<p>'. $this->getText() . '</p>' . PHP_EOL;
    }
}