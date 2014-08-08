<?php

namespace DesignPatterns\Structural\Decorator;

include_once 'Figure.php';

class Void extends Figure
{
    public function getInfo()
    {
        return '';
    }
}