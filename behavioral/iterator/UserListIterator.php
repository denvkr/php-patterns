<?php

namespace DesignPatterns\Behavioral\Iterator;

include_once 'UserList.php';

class UserListIterator implements \Iterator
{
    /**
     * @var UserList
     */
    private $userList = [];

    /**
     * @var int
     */
    private $key = 0;

    /**
     * @param UserList $list
     */
    public function __construct(UserList $list)
    {
        $this->userList = $list;
    }

    /**
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return User
     */
    public function current()
    {
        return $this->userList->getUser($this->key);
    }

    /**
     * Move forward to next element
     * @link http://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     */
    public function next()
    {
        $this->key++;
    }

    /**
     * Return the key of the current element
     * @link http://php.net/manual/en/iterator.key.php
     * @return int scalar on success, or null on failure.
     */
    public function key()
    {
        return $this->key;
    }

    /**
     * Checks if current position is valid
     * @link http://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     */
    public function valid()
    {
        return $this->key() < $this->userList->count();
    }

    /**
     * Rewind the Iterator to the first element
     * @link http://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     */
    public function rewind()
    {
        $this->key = 0;
    }
}