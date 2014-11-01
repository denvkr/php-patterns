<?php

namespace DesignPatterns\More\Registry;

class User
{
    /**
     * @var int
     */
    protected $pid = 0;

    /**
     * @var string
     */
    protected $name = '';

    /**
     * @var int
     */
    protected $age = 0;

    /**
     * @param int $pid
     */
    public function setPid($pid)
    {
        $this->pid = $pid;
    }

    /**
     * @return int
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * @param int $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function info()
    {
        return " {$this->name} {$this->age} years old";
    }
}