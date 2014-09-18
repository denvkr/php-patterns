<?php


namespace DesignPatterns\Behavioral\Visitor;

include_once 'RoleVisitorInterface.php';

class RolePrintVisitor implements RoleVisitorInterface
{
    /**
     * {@inheritdoc}
     */
    public function visitGroup(Group $role)
    {
        return 'Role: ' . $role->getName();
    }

    /**
     * {@inheritdoc}
     */
    public function visitUser(User $role)
    {
        return 'Role: ' . $role->getName();
    }
}