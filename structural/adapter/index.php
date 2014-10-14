<?php

namespace DesignPatterns\Structural\Adapter;

include_once 'SearchAdapter.php';

$searchYandex = new SearchAdapter(SearchAdapter::YANDEX);
$searchGoogle = new SearchAdapter(SearchAdapter::GOOGLE);

echo $searchYandex->getSearchPath('dzyanis') . PHP_EOL;
//http://yandex.by/yandsearch?text=dzyanis

echo $searchGoogle->getSearchPath('dzyanis') . PHP_EOL;
//http://www.google.by/search?q=dzyanis