<?php

namespace DesignPatterns\More\Registry;

include_once 'Registry.php';
include_once 'User.php';

$author = new User();
$author->setPid(1);
$author->setName('Dzyanis');
$author->setAge(28);

Registry::set('author', $author);

