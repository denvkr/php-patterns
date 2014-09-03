<?php

namespace DesignPatterns\Behavioral\Memento;

include_once 'Originator.php';
include_once 'Caretaker.php';

$originator = new Originator();
$originator->setState('on');
echo 'state: ' . $originator->getState() . PHP_EOL;

// Store internal state
$caretaker = new Caretaker();
echo "save\n";
$caretaker->setMemento($originator->createMemento());

// Continue changing originator
$originator->setState('off');
echo 'state: ' . $originator->getState() . PHP_EOL;

// Restore saved state
echo "restore\n";
$originator->setMemento($caretaker->getMemento());

echo 'state: ' . $originator->getState() . PHP_EOL;