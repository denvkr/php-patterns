<?php

namespace DesignPatterns\Creational\Prototype;

class User
{
    /**
     * @var string
     */
    protected $name = '';

    /**
     * @var int
     */
    protected $age = 0;

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
        return "Name {$this->name}, age {$this->age}";
    }
}