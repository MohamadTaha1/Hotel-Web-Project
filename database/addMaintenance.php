<?php


require 'vendor/autoload.php';

use MongoDB\Client;
use MongoDB\Driver\Manager;


$client = new MongoDB\Client(
    'mongodb://localhost:27017');
$db = $client->test;
var_dump($db);

$collection = $client->Hotel->Maintenance;
	
    
$main = [["location"=>"Room 18", "type"=> "Air conditioning", "status"=>"Pending"],
        ["location"=>"Gym", "type"=> "Machines", "status"=>"Pending"],
        ["location"=>"Main Lobby", "type"=> "Air conditioning", "status"=>"Pending"]
];

$result = $collection->insertMany($main);








?>