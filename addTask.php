<?php


require 'vendor/autoload.php';

use MongoDB\Client;
use MongoDB\Driver\Manager;


$client = new MongoDB\Client(
    'mongodb://localhost:27017');
$db = $client->test;
var_dump($db);

$collection = $client->Hotel->Task;
	
    
    echo "<h1>Inserting a New Item: \"IPhone X\" into the Products collection</h1>";
    $tasks = [
    [ 'employee_id' => 1, 'name' => 'Rissal' ,'task' => 'cooking' , 'shift'=>'night shift' , 'days'=>'MWF'],
    ['employee_id' => 2, 'name' => 'Dana' ,'task' => 'cleaning' , 'shift'=>'morning shift' , 'days'=>'TR',],
    ['employee_id' => 3, 'name' => 'Yara' ,'task' => 'reception' , 'shift'=>'morning shift' , 'days'=>'MWF'],
    ];

	$result = $collection->insertMany($tasks);
	echo "<h3>Inserted Users " . $result->getInsertedCount() . " new document(s): </h3>";
    







?>