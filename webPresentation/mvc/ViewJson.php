<?php

namespace DesignPatterns\WebPresentation\MVC;

include_once 'View.php';

class ViewJson
    extends View
{
    public function content()
    {
        return json_encode($this->data);
    }

    public function __toString()
    {
        return (string)$this->content();
    }
}