<?php

namespace DesignPatterns\Structural\Adapter;

class DriverYandex implements AdapterInterface
{
    const PATH = 'http://yandex.by/yandsearch?text=';

    /**
     * @param string $text
     * @return string
     */
    public function search($text)
    {
        return  self::PATH . $this->decode($text);
    }

    /**
     * @param $str
     * @return string
     */
    public function decode($str)
    {
        return urldecode($str);
    }
}