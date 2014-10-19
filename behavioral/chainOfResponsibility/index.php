<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility;

include_once 'StdoutLogger.php';
include_once 'EmailLogger.php';
include_once 'StderrLogger.php';

$logger = new StdoutLogger(Logger::DEBUG);
$logger1 = $logger->setNext(new EmailLogger(Logger::NOTICE));
$logger2 = $logger1->setNext(new StderrLogger(Logger::ERROR));
$logger->message('Entering function', Logger::DEBUG);
// Writing to stdout: Entering function
$logger->message("Step1 completed.", Logger::NOTICE);
// Writing to stdout: Step1 completed.
// Sending via email: Step1 completed.
$logger->message("An error has occurred.", Logger::ERROR);
// Writing to stdout: An error has occurred.
// Sending via email: An error has occurred.
// Sending to stderr: An error has occurred.