<?php

namespace DesignPatterns\WebPresentation\MVC;

include_once 'View.php';

class ViewText
    extends View
{
    public function content()
    {
        ob_start();
        include 'view/template.txt';
        $contents = ob_get_contents();
        ob_end_clean();
        return $contents;
    }

    public function __toString()
    {
        return (string)$this->content();
    }
}