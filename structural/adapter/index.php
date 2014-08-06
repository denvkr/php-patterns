<?php

namespace DesignPatterns\Structural\Adapter;

include_once 'SearchAdapter.php';

$searchYandex = new SearchAdapter(SearchAdapter::YANDEX);
$searchGoogle = new SearchAdapter(SearchAdapter::GOOGLE);

echo $searchYandex->getSearchPath('dzyanis') . PHP_EOL;
echo $searchGoogle->getSearchPath('dzyanis') . PHP_EOL;