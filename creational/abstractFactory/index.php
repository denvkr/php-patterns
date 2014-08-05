<?php

namespace DesignPatterns\Creational\AbstractFactory;
use DesignPatterns\Creational\AbstractFactory\Html as Html;
use DesignPatterns\Creational\AbstractFactory\Text as Text;

include_once 'Application.php';
include_once 'html/Factory.php';
include_once 'text/Factory.php';

$application = new Application();

function message(Application $application)
{
    $link = $application->createLink('LinkedIn', 'http://www.linkedin.com/pub/dzyanis-kuzmenka/30/4/862');
    $paragraph = $application->createParagraph('My profile on ' . $link);
    return $paragraph . $application->createBreakLine();
}

$application->setFactory(new Html\Factory);
echo message($application);

$application->setFactory(new Text\Factory);
echo message($application);