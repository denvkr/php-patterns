<?php

namespace DesignPatterns\Behavioral\Mediator;

include_once 'Mediator.php';

abstract class Colleague
{
    /**
     * @var Mediator
     */
    protected $mediator = null;

    /**
     * @param Mediator $mediator
     */
    public function __construct(Mediator $mediator)
    {
        $this->mediator = $mediator;
    }

    /**
     * @param string $message
     */
    public function send($message){
        return $this->mediator->send($message, $this);
    }

    /**
     * @param string $message
     */
    public abstract function notify($message);
}