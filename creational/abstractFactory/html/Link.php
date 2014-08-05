<?php

namespace DesignPatterns\Creational\AbstractFactory\Html;

use DesignPatterns\Creational\AbstractFactory as Base;

include_once realpath(dirname(__FILE__) . '/../AbstractParagraph.php');

class Link extends Base\AbstractLink
{
    /**
     * @return string
     */
    function content()
    {
        return "<a href=\"{$this->getUrl()}\">{$this->getText()}</a>";
    }
}