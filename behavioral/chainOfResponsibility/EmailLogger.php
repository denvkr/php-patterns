<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility;

include_once 'Logger.php';

class EmailLogger extends Logger
{
    /**
     * @param string $message
     * @return mixed
     */
    protected function writeMessage($message)
    {
        echo 'Sending via email: ' . $message . PHP_EOL;
    }
}