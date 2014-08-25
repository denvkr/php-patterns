<?php

namespace DesignPatterns\Behavioral\Mediator;

include_once 'Colleague.php';

abstract class Mediator
{
    /**
     * @param string $message
     * @param Colleague $colleague
     * @return string
     */
    public abstract function send($message, Colleague $colleague);
}