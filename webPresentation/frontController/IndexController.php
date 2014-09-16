<?php

namespace DesignPatterns\Structural\FrontController;

class IndexController
{
    public function indexAction()
    {
        return [
            'content' => 'Hello Front Controller',
        ];
    }
}