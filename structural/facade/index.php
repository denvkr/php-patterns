<?php

namespace DesignPatterns\Structural\Facade;

include_once 'ComputerFacade.php';

$computer = new ComputerFacade();
$computer->start(); /*
DesignPatterns\Structural\Facade\Cpu::freeze
DesignPatterns\Structural\Facade\Memory::load 42 Some data from your hard disk
DesignPatterns\Structural\Facade\Cpu::jump 42
DesignPatterns\Structural\Facade\Cpu::execute
*/