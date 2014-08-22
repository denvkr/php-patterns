<?php

namespace DesignPatterns\Behavioral\Iterator;

include_once 'User.php';

class UserList implements \Countable
{
    /**
     * @var User[]
     */
    private $users = [];

    /**
     * @param User $user
     */
    public function addUser(User $user)
    {
        $this->users[] = $user;
    }

    /**
     * @return User
     */
    public function getUser($key)
    {
        return $this->users[$key];
    }

    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * Count elements of an object
     * @link http://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     * </p>
     * <p>
     * The return value is cast to an integer.
     */
    public function count()
    {
        return count($this->users);
    }

}