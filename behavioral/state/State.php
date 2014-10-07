<?php

namespace DesignPatterns\Behavioral\State;

abstract class State
{
    /**
     * @return string
     */
    abstract public function next();

    /**
     * @return string
     */
    abstract public function back();
}