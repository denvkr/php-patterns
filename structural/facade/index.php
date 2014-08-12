<?php

namespace DesignPatterns\Structural\Facade;

include_once 'ComputerFacade.php';

$computer = new ComputerFacade();
$computer->start();