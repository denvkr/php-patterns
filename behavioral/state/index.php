<?php

namespace DesignPatterns\Behavioral\State;

include 'AudioSystem.php';

$audioSystem = new AudioSystem(AudioSystem::RADIO);
echo $audioSystem->next() . PHP_EOL; // find next radio station
echo $audioSystem->back() . PHP_EOL; // back radio station

$audioSystem->setMode(AudioSystem::CD);
echo $audioSystem->next() . PHP_EOL; // next track
echo $audioSystem->back() . PHP_EOL; // back track