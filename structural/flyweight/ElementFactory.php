<?php

namespace DesignPatterns\Structural\Flyweight;

use DesignPatterns\Structural\Flyweight\Elements as Elements;

//include_once realpath(dirname(__FILE__) . '/elements/Hydrogen.php');
include_once 'elements/Hydrogen.php';
include_once 'elements/Helium.php';
include_once 'elements/Lithium.php';
include_once 'elements/Ununoctium.php';
//include_once realpath(dirname(__FILE__) . '/elements/Ununoctium.php');

/**
 * Flyweight Factory
 */
class ElementFactory
{
    private $elements = [];

    public function getElement($symbol)
    {
        if (! isset($this->elements[$symbol])) {
            switch ($symbol) {
                case 'H':
                    $this->setElement($symbol, new Elements\Hydrogen());
                    break;

                case 'He':
                    $this->setElement($symbol, new Elements\Helium());
                    break;

                case 'Li':
                    $this->setElement($symbol, new Elements\Lithium());
                    break;

                case 'Uuo':
                    $this->setElement($symbol, new Elements\Ununoctium());
                    break;

                default:
                    throw new \Exception("Unknown element '{$symbol}'");
            }
        }

        return $this->elements[$symbol];
    }

    public function setElement($symbol, Element $element)
    {
        $this->elements[$symbol] = $element;
    }
}