<?php

namespace DesignPatterns\Behavioral\Memento;

class Memento
{
    private $state;

    public function __construct($state)
    {
        $this->setState($state);
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }
}