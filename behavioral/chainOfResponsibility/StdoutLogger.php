<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility;

include_once 'Logger.php';

class StdoutLogger extends Logger
{
    /**
     * @param string $message
     * @return mixed
     */
    protected function writeMessage($message)
    {
        echo 'Writing to stdout: ' . $message . PHP_EOL;
    }
}