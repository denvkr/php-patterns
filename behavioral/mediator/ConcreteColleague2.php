<?php

namespace DesignPatterns\Behavioral\Mediator;

include_once 'Colleague.php';

class ConcreteColleague2 extends Colleague
{
    public function notify($message)
    {
        return 'Collegue2 gets message: '. $message .PHP_EOL;
    }
}