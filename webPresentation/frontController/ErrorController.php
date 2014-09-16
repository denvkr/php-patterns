<?php

namespace DesignPatterns\Structural\FrontController;

class ErrorController
{
    public function indexAction($request)
    {
        return [
            'err' => $request['exception']->getMessage(),
        ];
    }
}