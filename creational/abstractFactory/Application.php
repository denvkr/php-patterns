<?php

namespace DesignPatterns\Creational\AbstractFactory;

include_once 'AbstractFactory.php';

class Application
{
    private $factory = null;

    /**
     * @param AbstractFactory $factory
     */
    public function setFactory(AbstractFactory $factory)
    {
        $this->factory = $factory;
    }

    /**
     * @return AbstractFactory
     */
    public function getFactory()
    {
        return $this->factory;
    }

    /**
     * @param string $text
     * @return AbstractParagraph
     */
    public function createParagraph($text)
    {
        return $this->getFactory()->createParagraph($text);
    }

    /**
     * @param string $text
     * @param string $url
     * @return AbstractLink
     */
    public function createLink($text, $url)
    {
        return $this->getFactory()->createLink($text, $url);
    }

    /**
     * @return AbstractBreakLine
     */
    public function createBreakLine()
    {
        return $this->getFactory()->createBreakLine();
    }
}