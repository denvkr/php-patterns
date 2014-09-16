<?php

namespace DesignPatterns\Structural\FrontController;

class ArithmeticController
{
    public function additionAction($request)
    {
        return [
            'result' => $request['a'] + $request['b'],
        ];
    }

    public function subtractionAction($request)
    {
        return [
            'result' => $request['a'] - $request['b'],
        ];
    }
}