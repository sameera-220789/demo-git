<?php


ini_set('display_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/../vendor/autoload.php';


$client = new MongoDB\Client("mongodb://127.0.0.1:27017");
$db = $client->SammeraTech;
$collection = $db->users;
?>