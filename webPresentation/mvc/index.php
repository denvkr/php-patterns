<?php

namespace DesignPatterns\WebPresentation\MVC;

include_once 'Controller.php';

$controller = new Controller();
echo $controller->actionXml() . PHP_EOL; /*
<document>
    <type>xml</type>
    <user_id>1</user_id>
    <user_name>Dzyanis Kuzmenka</user_name>
 </document> */

echo $controller->actionText() . PHP_EOL; /*
This is {$this->data->type}
User id {$this->data->user_id}
User name {$this->data->user_name} */

echo $controller->actionJson() . PHP_EOL; /*
{
    "type":"xml",
    "user_id":1,
    "user_name":"Dzyanis Kuzmenka"
 } */