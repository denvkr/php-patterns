<?php

namespace DesignPatterns\Creational\Prototype;

include_once 'User.php';

$userA = new User();
$userA->setName('Dzyanis');
$userA->setAge(27);
echo $userA->info() . PHP_EOL;

$userB = clone $userA;
echo $userB->info() . PHP_EOL;