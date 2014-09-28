<?php

namespace DesignPatterns\WebPresentation\MVC;

abstract class View
{
    protected $data = [];

    public function __construct($data)
    {
        $this->data = $data;
    }

    abstract public function content();
}