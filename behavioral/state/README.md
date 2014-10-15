#State
This pattern is used in computer programming to encapsulate varying behavior for the same routine based on
an object's state object.
[More…](http://en.wikipedia.org/wiki/State_pattern)

```php
$audioSystem = new AudioSystem(AudioSystem::RADIO);
echo $audioSystem->next() . PHP_EOL; // find next radio station
echo $audioSystem->back() . PHP_EOL; // back radio station

$audioSystem->setMode(AudioSystem::CD);
echo $audioSystem->next() . PHP_EOL; // next track
echo $audioSystem->back() . PHP_EOL; // back track
```

##Diagram
![State UML Diagram](diagram.png)

##External links
* [Event-driven finite-state machine](http://en.wikipedia.org/wiki/Event-driven_finite-state_machine)