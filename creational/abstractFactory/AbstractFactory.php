<?php

namespace DesignPatterns\Creational\AbstractFactory;

include_once 'AbstractParagraph.php';
include_once 'AbstractLink.php';
include_once 'AbstractBreakLine.php';

abstract class AbstractFactory
{
    /**
     * @param string $text
     * @return AbstractParagraph
     */
    abstract public function createParagraph($text);

    /**
     * @param string $text
     * @param string $url
     * @return AbstractLink
     */
    abstract public function createLink($text, $url);

    /**
     * @return AbstractBreakLine
     */
    abstract public function createBreakLine();
}