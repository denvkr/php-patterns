<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility;

include_once 'Logger.php';

class StderrLogger extends Logger
{
    /**
     * @param string $message
     * @return mixed
     */
    protected function writeMessage($message)
    {
        echo 'Sending to stderr: ' . $message . PHP_EOL;
    }
}