<?php

namespace DesignPatterns\Structural\FrontController;

include_once 'FrontController.php';

$request = [
    'a' => 4,
    'b' => 2,
];

$frontController = new FrontController();
$respond = $frontController->run();
var_dump($respond);
// array(1) { 'content' => string(22) "Hello Front Controller"}

$respond = $frontController->run('unknown');
var_dump($respond);
// array(1) {'err' =>  string(38) "File 'UnknownController.php' not found" }

$respond = $frontController->run('arithmetic/unknown');
var_dump($respond);
// array(1) {'err' => string(26) "Action 'unknown' not found" }

$respond = $frontController->run('arithmetic/addition', $request);
var_dump($respond);
//array(1) { 'result' => int(6) }

$respond = $frontController->run('arithmetic/subtraction', $request);
var_dump($respond);
// array(1) {'result' => int(2) }