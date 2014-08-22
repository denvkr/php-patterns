<?php

namespace DesignPatterns\Behavioral\Iterator;

class User
{
    /**
     * @var string
     */
    private $name = '';

    /**
     * @var int
     */
    private $age = 0;

    /**
     * @param string $name
     * @param int $age
     */
    public function __construct($name, $age)
    {
        $this->setAge($age);
        $this->setName($name);
    }


    /**
     * @param string $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @param int $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function info()
    {
        return "Name: {$this->name} age: {$this->age}\n";
    }
}