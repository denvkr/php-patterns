<?php


namespace DesignPatterns\Behavioral\Observer;

class Reader implements \SplObserver
{
    /**
     * @var string
     */
    private $name;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @param \SplSubject $subject
     */
    public function update(\SplSubject $subject)
    {
        echo $this->name.' is reading breakout news <b>'.$subject->getContent().'</b><br>' . PHP_EOL;
    }
}