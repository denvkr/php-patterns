<?php

namespace DesignPatterns\Behavioral\Observer;

include_once 'Newspaper.php';
include_once 'Reader.php';

$newspaper = new Newspaper('The New York Times');

$allen = new Reader('Allen');
$jim = new Reader('Jim');
$linda = new Reader('Linda');

$newspaper->attach($allen);
$newspaper->attach($jim);
$newspaper->attach($linda);

$newspaper->detach($linda);

$newspaper->breakOutNews('USA break down!'); /*
Allen is reading breakout news USA break down! (Newyork Times)
Jim is reading breakout news USA break down! (Newyork Times)
*/