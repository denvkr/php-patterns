<?php

namespace DesignPatterns\Behavioral\Mediator;

include_once 'Mediator.php';
include_once 'Colleague.php';

class ConcreteMediator extends Mediator
{
    /**
     * @var Colleague
     */
    private $colleague1;

    /**
     * @var Colleague
     */
    private $colleague2;

    public function setColleague1(Colleague $colleague)
    {
        $this->colleague1 = $colleague;
    }

    public function setColleague2(Colleague $colleague)
    {
        $this->colleague2 = $colleague;
    }

    public function send($message, Colleague $colleague)
    {
        if ($colleague == $this->colleague1) {
            return $this->colleague2->notify($message);
        } else {
            return $this->colleague1->notify($message);
        }
    }
}