<?php

namespace DesignPatterns\Creational\Builder;

include_once 'UserBuilder.php';

$builder = new UserBuilder();
$builder->setFirstname('Dzyanis');
$builder->setLastname('Kuzmenka');
$builder->setLinkedinProfile('www.linkedin.com/pub/dzyanis-kuzmenka/30/4/862');
$builder->setFemale();

/* Many years later */

$userF = $builder->buildUser();
echo "Hello my name is {$userF->getFirstname()} {$userF->getLastname()} and I'm not {$userF->getGender()}, ";

$builder->setMale();
$userM = $builder->buildUser();
echo "because I'm {$userM->getGender()}.\n";
echo 'More information about me: ' . $userM->getLinkedinProfile() . PHP_EOL;