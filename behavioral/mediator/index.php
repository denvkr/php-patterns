<?php

namespace DesignPatterns\Behavioral\Mediator;

include_once 'ConcreteMediator.php';
include_once 'ConcreteColleague1.php';
include_once 'ConcreteColleague2.php';

$mediator = new ConcreteMediator();

$collegue1 = new ConcreteColleague1($mediator);
$collegue2 = new ConcreteColleague2($mediator);

$mediator->setColleague1($collegue1);
$mediator->setColleague2($collegue2);

echo $collegue1->send('How are you ?');
// Collegue2 gets message: How are you ?
echo $collegue2->send('Fine, thanks!');
// Collegue1 gets message: Fine, thanks!