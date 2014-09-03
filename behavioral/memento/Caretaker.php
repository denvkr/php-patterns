<?php

namespace DesignPatterns\Behavioral\Memento;

include_once 'Memento.php';

class Caretaker
{
    /**
     * @return Memento
     */
    private $memento;

    /**
     * @return Memento
     */
    public function getMemento()
    {
        return $this->memento;
    }

    /**
     * @param Memento $memento
     */
    public function setMemento(Memento $memento)
    {
        $this->memento = $memento;
    }
}