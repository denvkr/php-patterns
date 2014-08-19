<?php

namespace DesignPatterns\Behavioral\Observer;

class Newspaper implements \SplSubject
{
    /**
     * @var
     */
    private $name;

    /**
     * @var array
     */
    private $observers = [];

    /**
     * @var string
     */
    private $content;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @param \SplObserver $observer
     */
    public function attach(\SplObserver $observer)
    {
        $this->observers[] = $observer;
    }

    /**
     * @param \SplObserver $observer
     */
    public function detach(\SplObserver $observer)
    {
        $key = array_search($observer, $this->observers, true);
        if($key) {
            unset($this->observers[$key]);
        }
    }

    /**
     * @param string $content
     */
    public function breakOutNews($content)
    {
        $this->content = $content;
        $this->notify();
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content . " ({$this->name})";
    }

    /**
     * Notify observers(or some of them)
     */
    public function notify()
    {
        foreach ($this->observers as $value) {
            $value->update($this);
        }
    }
}