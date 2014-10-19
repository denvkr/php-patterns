<?php

namespace DesignPatterns\Behavioral\Visitor;

include_once 'RolePrintVisitor.php';
include_once 'User.php';
include_once 'Group.php';

$visitor = new RolePrintVisitor();

$user = new User('Dzyanis');
echo $user->accept($visitor) . PHP_EOL;
// Role: User: Dzyanis

$group = new Group('Programmer');
echo $group->accept($visitor) . PHP_EOL;
// Role: Group: Programmer