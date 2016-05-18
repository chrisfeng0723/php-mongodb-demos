<?php
require('../vendor/autoload.php');

$client = new MongoDB\Client('mongodb://10.100.14.228:27017');

$collection = $client->selectCollection('study', 'test');

$cursor = $collection->find([], [
    'typeMap' => [
        'root' => 'array',
        'document' => 'array',
        'array' => 'array'
    ]
]);

foreach ($cursor as $document) {
    var_dump($document);
}