<?php

namespace DesignPatterns\Creational\AbstractFactory;

include_once 'AbstractContent.php';

abstract class AbstractParagraph extends AbstractContent
{
    /**
     * @var string
     */
    protected $text = '';

    /**
     * @param string $text
     */
    public function __construct($text)
    {
        $this->setText($text);
    }

    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }
}