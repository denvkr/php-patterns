#Registry
A global object that other objects can use to find common objects.
[More…](http://martinfowler.com/eaaCatalog/registry.html)

bootstrap.php:
```php
$author = new User();
$author->setPid(1);
$author->setName('Dzyanis');
$author->setAge(28);

Registry::set('author', $author);
```

index.php:
```php
$userJack = new User();
$userJack->setPid(42);
$userJack->setName('Jack');
$userJack->setAge(30);

echo "Jack is author?\n";
echo Registry::get('author')->getPid() == $userJack->getPid() ? 'Yes' : 'No';
echo ", author is " . Registry::get('author')->info() . PHP_EOL; /*
Jack is author?
No, author is  Dzyanis 28 years old
*/
```

##Example
* [Registry from Zend Framework](https://github.com/zendframework/zf1/blob/master/library/Zend/Registry.php#L30)