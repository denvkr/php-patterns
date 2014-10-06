<?php

namespace DesignPatterns\Structural\TemplateMethod;

abstract class Kernel
{
    /**
     * @param mixed $params
     * @return array
     */
    abstract function init($params);

    /**
     * @return array
     */
    abstract function check();

    /**
     * @return array
     */
    abstract function end();

    /**
     * @param mixed $params
     * @param int $playersCount
     */
    public final function run($params = null)
    {
        $log = [];
        $log += $this->init($params);
        $log += $this->check();
        $log['done'] = 'something';
        $log += $this->end();

        return $log;
    }
}