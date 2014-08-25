<?php

namespace DesignPatterns\Behavioral\Mediator;

include_once 'Colleague.php';

class ConcreteColleague1 extends Colleague
{
    public function notify($message)
    {
        return 'Collegue1 gets message: '. $message .PHP_EOL;
    }
}