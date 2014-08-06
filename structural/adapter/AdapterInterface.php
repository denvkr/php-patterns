<?php

namespace DesignPatterns\Structural\Adapter;

interface AdapterInterface
{
    /**
     * @param string $text
     * @return string
     */
    public function search($text);
}