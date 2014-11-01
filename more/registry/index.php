<?php

namespace DesignPatterns\More\Registry;

include_once 'bootstrap.php';

$userJack = new User();
$userJack->setPid(42);
$userJack->setName('Jack');
$userJack->setAge(30);

echo "Jack is author?\n";
echo Registry::get('author')->getPid() == $userJack->getPid() ? 'Yes' : 'No';
echo ", author is " . Registry::get('author')->info() . PHP_EOL; /*
Jack is author?
No, author is  Dzyanis 28 years old
*/
