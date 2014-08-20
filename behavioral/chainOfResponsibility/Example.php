<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility;

include_once 'StdoutLogger.php';
include_once 'EmailLogger.php';
include_once 'StderrLogger.php';

class Example
{
    public function run()
    {
        $logger = new StdoutLogger(Logger::DEBUG);
        $logger1 = $logger->setNext(new EmailLogger(Logger::NOTICE));
        $logger2 = $logger1->setNext(new StderrLogger(Logger::ERROR));

        $logger->message("Entering function y.", Logger::DEBUG);

        $logger->message("Step1 completed.", Logger::NOTICE);

        $logger->message("An error has occurred.", Logger::ERROR);
    }
}