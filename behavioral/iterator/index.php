<?php

namespace DesignPatterns\Behavioral\Iterator;

include_once 'UserListIterator.php';

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