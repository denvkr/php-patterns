<?php

namespace DesignPatterns\Creational\AbstractFactory\Text;

use DesignPatterns\Creational\AbstractFactory as Base;

include_once realpath(dirname(__FILE__) . '/../AbstractParagraph.php');

class Link extends Base\AbstractLink
{
    /**
     * @return string
     */
    function content()
    {
        return "{$this->getText()} ({$this->getUrl()})";
    }
}