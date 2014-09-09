<?php

namespace DesignPatterns\Behavioral\Command;

abstract class Command
{
    public abstract function execute();

    public abstract function unExecute();
}