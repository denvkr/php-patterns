<?php

namespace DesignPatterns\Behavioral\Visitor;

include_once 'User.php';
include_once 'Group.php';

interface RoleVisitorInterface
{
    public function visitUser(User $role);

    public function visitGroup(Group $role);
}