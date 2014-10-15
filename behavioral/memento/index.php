<?php

namespace DesignPatterns\Behavioral\Memento;

include_once 'Originator.php';
include_once 'Caretaker.php';

$originator = new Originator();
$originator->setState('on');
echo 'state: ' . $originator->getState() . PHP_EOL;
// state: on

// Store internal state
$caretaker = new Caretaker();
echo "save\n";
// save
$caretaker->setMemento($originator->createMemento());

// Continue changing originator
$originator->setState('off');
echo 'state: ' . $originator->getState() . PHP_EOL;
// state: off

// Restore saved state
echo "restore\n";
// restore
$originator->setMemento($caretaker->getMemento());

echo 'state: ' . $originator->getState() . PHP_EOL;
// state: on