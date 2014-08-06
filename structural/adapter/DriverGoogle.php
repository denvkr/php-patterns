<?php

namespace DesignPatterns\Structural\Adapter;

class DriverGoogle implements AdapterInterface
{
    /**
     * @param string $text
     * @return string
     */
    public function search($text)
    {
        return 'http://www.google.by/search?q=' . urldecode($text);
    }
}