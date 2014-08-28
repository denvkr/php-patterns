<?php

namespace DesignPatterns\Behavioral\Strategy;

include 'Expression.php';
include 'Addition.php';
include 'Subtraction.php';

$expression = new Expression(4, 2);
$expression->setStrategy(new Addition());
echo 'addition: ' . $expression->solve() . PHP_EOL;
// addition: 6
$expression->setStrategy(new Subtraction());
echo 'subtraction: ' . $expression->solve() . PHP_EOL;
// subtraction: 2