<?php

namespace DesignPatterns\Structural\Adapter;

include_once 'AdapterInterface.php';
include_once 'DriverYandex.php';
include_once 'DriverGoogle.php';

class SearchAdapter
{
    const YANDEX = 'yandex';

    const GOOGLE = 'google';

    /**
     * @var AdapterInterface
     */
    protected $driver = null;

    /**
     * @param $driver
     */
    public function __construct($driver)
    {
        switch ($driver) {
            case self::GOOGLE:
                $this->setDriver(new DriverGoogle());
                break;
            case self::YANDEX:
                $this->setDriver(new DriverYandex());
                break;
            default:
                throw new \Exception('Unknown driver');
        }
    }

    /**
     * @param AdapterInterface $driver
     */
    public function setDriver(AdapterInterface $driver)
    {
        $this->driver = $driver;
    }

    /**
     * @return AdapterInterface
     */
    public function getDriver()
    {
        return $this->driver;
    }

    /**
     * @param string $text
     * @return string
     */
    public function getSearchPath($text)
    {
        return $this->getDriver()->search($text);
    }
}