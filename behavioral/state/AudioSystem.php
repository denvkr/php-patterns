<?php

namespace DesignPatterns\Behavioral\State;

include 'RadioState.php';
include 'CdState.php';

class AudioSystem
{
    const RADIO = 'radio';

    const CD    = 'cd';

    /**
     * @var State
     */
    protected $state;

    /**
     * @param string $mode
     */
    public function __construct($mode)
    {
        $this->setMode($mode);
    }

    /**
     * @return string
     */
    public function next()
    {
        return $this->state->next();
    }

    /**
     * @return string
     */
    public function back()
    {
        return $this->state->back();
    }

    /**
     * @param string $mode
     * @throws \Exception
     */
    public function setMode($mode)
    {
        switch ($mode) {
            case self::RADIO:
                $this->state = new RadioState();
                break;

            case self::CD:
                $this->state = new CdState();
                break;

            default:
                throw new \Exception('Unknown mode');
        }
    }
}