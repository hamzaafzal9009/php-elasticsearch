<?php
require __DIR__ . '/vendor/autoload.php';
use Elasticsearch\ClientBuilder;

$client = ClientBuilder::create()
    ->setHosts(['localhost:9200'])
    ->build();

$result = $client->cluster()->health();
var_dump($result);