<?php

namespace DesignPatterns\Creational\AbstractFactory\Text;

use DesignPatterns\Creational\AbstractFactory as Base;

include_once realpath(dirname(__FILE__) . '/../AbstractParagraph.php');

class Paragraph extends Base\AbstractParagraph
{
    /**
     * @return string
     */
    function content()
    {
        return $this->getText() . PHP_EOL;
    }
}