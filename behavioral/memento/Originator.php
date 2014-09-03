<?php

namespace DesignPatterns\Behavioral\Memento;

class Originator
{
    /**
     * @var string
     */
    private $state = '';

    /**
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @return Memento
     */
    public function createMemento()
    {
        return new Memento($this->state);
    }

    /**
     * @param Memento $memento
     */
    public function setMemento(Memento $memento)
    {
        $this->state = $memento->getState();
    }
}