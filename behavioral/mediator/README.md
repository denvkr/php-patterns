#Mediator
The mediator pattern defines an object that encapsulates how a set of objects interact.
This pattern is considered to be a behavioral pattern due to the way it can alter the program's running behavior.
[More…](http://en.wikipedia.org/wiki/Mediator_pattern)

```php
$mediator = new ConcreteMediator();

$collegue1 = new ConcreteColleague1($mediator);
$collegue2 = new ConcreteColleague2($mediator);

$mediator->setColleague1($collegue1);
$mediator->setColleague2($collegue2);

echo $collegue1->send('How are you ?');
// Collegue2 gets message: How are you ?
echo $collegue2->send('Fine, thanks!');
// Collegue1 gets message: Fine, thanks!
```