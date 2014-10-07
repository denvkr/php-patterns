<?php

namespace DesignPatterns\Behavioral\State;

include_once 'State.php';

class CdState
    extends State
{
    /**
     * @return string
     */
    public function next()
    {
        return 'next track';
    }

    /**
     * @return string
     */
    public function back()
    {
        return 'back track';
    }
}