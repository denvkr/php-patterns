<?php

namespace DesignPatterns\Structural\Facade;

class Memory
{
    public function load($position, $data)
    {
        echo __METHOD__.' '.$position.' '.$data.PHP_EOL;
    }
}