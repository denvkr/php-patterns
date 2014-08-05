<?php

namespace DesignPatterns\Creational\AbstractFactory\Text;

use DesignPatterns\Creational\AbstractFactory as Base;

include_once realpath(dirname(__FILE__) . '/../AbstractParagraph.php');
include_once 'Paragraph.php';
include_once 'Link.php';
include_once 'BreakLine.php';

class Factory extends Base\AbstractFactory
{
    /**
     * @param string $text
     * @return Paragraph
     */
    public function createParagraph($text)
    {
        return new Paragraph($text);
    }

    /**
     * @param string $text
     * @param string $url
     * @return Link
     */
    public function createLink($text, $url)
    {
        return new Link($text, $url);
    }

    /**
     * @return BreakLine
     */
    public function createBreakLine()
    {
        return new BreakLine();
    }

}