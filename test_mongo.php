<?php

require 'vendor/autoload.php';

$client = new MongoDB\Client("mongodb://localhost:27017");

$db = $client->testdb;
$collection = $db->students;

$collection->insertOne([
    'name' => 'Sam',
    'course' => 'CS',
    'year' => 2
]);

$result = $collection->find();

foreach ($result as $doc) {
    echo $doc['name'] . " - " . $doc['course'] . "<br>";
}