#Iterator
An iterator is an object that enables a programmer to traverse a container, particularly lists.
Various types of iterators are often provided via a container's interface.
Though the interface and semantics of a given iterator are fixed,
iterators are often implemented in terms of the structures underlying a container implementation and are often tightly
coupled to the container to enable the operational semantics of the iterator.
Note that an iterator performs traversal and also gives access to data elements in a container, but does not perform iteration
(i.e., not without some significant liberty taken with that concept or with trivial use of the terminology).
An iterator is behaviorally similar to a database cursor.
[More…](http://en.wikipedia.org/wiki/Iterator)

```php
$users = new UserList();
$users->addUser(new User('Harrison Ford', 72));
$users->addUser(new User('Rutger Hauer', 70));
$users->addUser(new User('Sean Young', 54));
$users->addUser(new User('Edward James Olmos', 67));

$iterator = new UserListIterator($users);
for ($iterator->rewind(); $iterator->valid(); $iterator->next()) {
    echo $iterator->current()->info();
} /*
Name: Harrison Ford age: 72
Name: Rutger Hauer age: 70
Name: Sean Young age: 54
Name: Edward James Olmos age: 67
*/
```

##Linsk
* [List of Iterators in PHP](http://php.net/manual/en/spl.iterators.php)