<?php

namespace DesignPatterns\Behavioral\Visitor;

include_once 'RoleVisitorInterface.php';

abstract class Role
{
    /**
     * @param RoleVisitorInterface $visitor
     * @throws \InvalidArgumentException
     */
    public function accept(RoleVisitorInterface $visitor)
    {
        $class = get_called_class();
        preg_match('#([^\\\\]+)$#', $class, $extract);
        $visitingMethod = 'visit' . $extract[1];

        if (!method_exists(__NAMESPACE__ . '\RoleVisitorInterface', $visitingMethod)) {
            throw new \InvalidArgumentException("The visitor you provide cannot visit a $class instance");
        }

        return call_user_func([$visitor, $visitingMethod], $this);
    }
}