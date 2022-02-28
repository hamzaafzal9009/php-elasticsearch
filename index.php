<?php 
require __DIR__ . '/vendor/autoload.php';

require __DIR__ . '/DotEnv.php';

use Elasticsearch\ClientBuilder;

(new DotEnv(__DIR__ . '/.env'))->load();

$client = ClientBuilder::create()
    ->setHosts(['localhost:9200'])
    ->build();


echo getenv('ES_PASSWORD');
//$result = $client->info();
//var_dump($result);