<?php

namespace DesignPatterns\Creational\AbstractFactory;

include_once 'AbstractContent.php';

abstract class AbstractLink extends AbstractContent
{

    /**
     * @var string
     */
    protected $text = '';

    /**
     * @var string
     */
    protected $url = '';

    /**
     * @param string $text
     * @param string $url
     */
    public function __construct($text, $url)
    {
        $this->setText($text);
        $this->setUrl($url);
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

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}