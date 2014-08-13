<?php

namespace DesignPatterns\Structural\Proxy;

include_once 'MathProxy.php';
include_once 'Math.php';

$math = new Math();
echo 'add 2 2 : ' . $math->add(2, 2) . PHP_EOL;
echo 'div 2 2 : ' . $math->div(2, 2) . PHP_EOL;
echo 'sub 2 2 : ' . $math->sub(2, 2) . PHP_EOL;
echo 'mul 2 2 : ' . $math->mul(2, 2) . PHP_EOL;

$math = new MathProxy();
echo "Proxy:\n";
echo 'add 2 2 : ' . $math->add(2, 2) . PHP_EOL;
echo 'sub 2 2 : ' . $math->sub(2, 2) . PHP_EOL;
echo 'div 2 2 : ' . $math->div(2, 2) . PHP_EOL;
echo 'mul 2 2 : ' . $math->mul(2, 2) . PHP_EOL;