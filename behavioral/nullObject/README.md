#Null Object
А Null Object is an object with defined neutral ("null") behavior.
The Null Object design pattern describes the uses of such objects and their behavior (or lack thereof).
[More…](http://en.wikipedia.org/wiki/Null_Object_pattern)

```php
function doSomething(Animal $animal)
{
    $animal->sound();
}

doSomething(new Dog); // woof
doSomething(new NullAnimal); //
```