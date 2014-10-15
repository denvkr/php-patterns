<?php

namespace DesignPatterns\Structural\Proxy;

include_once 'MathProxy.php';
include_once 'Math.php';

$math = new Math(); // INIT VERY FAT OBJECT
echo 'add 2 2 : ' . $math->add(2, 2) . PHP_EOL; // add 2 2 : 4
echo 'div 2 2 : ' . $math->div(2, 2) . PHP_EOL; // div 2 2 : 1
echo 'sub 2 2 : ' . $math->sub(2, 2) . PHP_EOL; // sub 2 2 : 0
echo 'mul 2 2 : ' . $math->mul(2, 2) . PHP_EOL; // mul 2 2 : 4

$math = new MathProxy();
echo "Proxy:\n"; // Proxy:
echo 'add 2 2 : ' . $math->add(2, 2) . PHP_EOL; // add 2 2 : 4
echo 'sub 2 2 : ' . $math->sub(2, 2) . PHP_EOL; // sub 2 2 : 0
// INIT VERY FAT OBJECT
echo 'div 2 2 : ' . $math->div(2, 2) . PHP_EOL; // div 2 2 : 4
echo 'mul 2 2 : ' . $math->mul(2, 2) . PHP_EOL; // mul 2 2 : 4