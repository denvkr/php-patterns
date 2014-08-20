<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility;

abstract class Logger
{
    const ERROR = 3;
    const NOTICE = 5;
    const DEBUG = 7;

    /**
     * @var
     */
    protected $mask;

    /**
     * The next element in the chain of responsibility
     * @var Logger
     */
    protected $next;

    public function __construct($mask)
    {
        $this->mask = $mask;
    }

    /**
     * @param Logger $log
     * @return Logger
     */
    public function setNext(Logger $log)
    {
        $this->next = $log;
        return $log;
    }

    /**
     * @param string $message
     * @param int $priority
     */
    public function message($message, $priority)
    {
        if ($priority <= $this->mask) {
            $this->writeMessage($message);
        }

        if ($this->next != null) {
            $this->next->message($message, $priority);
        }
    }

    /**
     * @param string $message
     * @return mixed
     */
    protected abstract function writeMessage($message);
}