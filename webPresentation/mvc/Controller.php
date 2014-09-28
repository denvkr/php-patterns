<?php

namespace DesignPatterns\WebPresentation\MVC;

include_once 'User.php';
include_once 'ViewXml.php';
include_once 'ViewText.php';
include_once 'ViewJson.php';

class Controller
{
    public function actionXml()
    {
        return new ViewXml([
            'type' => 'xml',
            'user_id' => $this->getModel()->id,
            'user_name' => $this->getModel()->name,
        ]);
    }

    public function actionText()
    {
        return new ViewText([
            'type' => 'xml',
            'user_id' => $this->getModel()->id,
            'user_name' => $this->getModel()->name,
        ]);
    }

    public function actionJson()
    {
        return new ViewJson([
            'type' => 'xml',
            'user_id' => $this->getModel()->id,
            'user_name' => $this->getModel()->name,
        ]);
    }

    private function getModel()
    {
        $user = new User();
        $user->id = 1;
        $user->name = 'Dzyanis Kuzmenka';
        return $user;
    }
}