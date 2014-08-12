<?php

namespace DesignPatterns\Structural\Facade;

class Cpu
{
    public function freeze()
    {
        echo __METHOD__.PHP_EOL;
    }

    public function jump($position)
    {
        echo __METHOD__.' '.$position.' '.PHP_EOL;
    }

    public function execute()
    {
        echo __METHOD__.PHP_EOL;
    }
}