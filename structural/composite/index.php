<?php

namespace DesignPatterns\Structural\Composite;

include_once 'Composite.php';
include_once 'Leaf.php';

// Create a tree structure
$root = new Composite('root');

$root->add(new Leaf('Leaf A'));
$root->add(new Leaf('Leaf B'));

$comp = new Composite('Composite X');

$comp->add(new Leaf('Leaf XA'));
$comp->add(new Leaf('Leaf XB'));
$root->add($comp);
$root->add(new Leaf('Leaf C'));

// Add and remove a leaf
$leaf = new Leaf('Leaf D');
$root->add($leaf);
$root->remove($leaf);

// Recursively display tree
$root->display(); /*
Leaf A
Leaf B
Leaf XA
Leaf XB
Leaf C
*/