<?php

namespace DesignPatterns\Behavioral\State;

include_once 'State.php';

class RadioState
    extends State
{
    /**
     * @return string
     */
    public function next()
    {
        return 'find next radio station';
    }

    /**
     * @return string
     */
    public function back()
    {
        return 'back radio station';
    }
}