<?php

namespace DesignPatterns\Structural\Decorator;

include_once 'Figure.php';

class Bar extends Figure
{
    /**
     * @var Figure
     */
    protected $figure = null;

    /**
     * @param Figure $figure
     */
    function __construct(Figure $figure)
    {
        $this->figure = $figure;
        $this->name = 'Bar ';
    }

    /**
     * @return string
     */
    public function getInfo()
    {
        return $this->name. $this->figure->getInfo();
    }
}