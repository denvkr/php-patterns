<?php

namespace DesignPatterns\Structural\Composite;

include_once 'Component.php';

class Leaf extends Component
{
    public function add(Component $c)
    {
        echo 'Cannot add to a leaf' . PHP_EOL;
    }

    public function remove(Component $c)
    {
        echo 'Cannot remove from a leaf' . PHP_EOL;
    }

    public function display()
    {
        echo $this->name . PHP_EOL;
    }
}