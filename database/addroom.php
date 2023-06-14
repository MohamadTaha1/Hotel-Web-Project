<?php


require 'vendor/autoload.php';

use MongoDB\Client;
use MongoDB\Driver\Manager;


$client = new MongoDB\Client(
    'mongodb://localhost:27017');
$db = $client->test;
var_dump($db);

$collection = $client->Hotel->Room;
	
    
    echo "<h1>Inserting a New Item: \"IPhone X\" into the Products collection</h1>";
    $rooms = [
        ['room_id'=>1, 'type'=>'Family and Sharing Rooms',  'price'=>'450',  'dates'=> array(['2023-1-18', '2023-1-19'], ['2023-1-22', '2023-1-29'])],
        ['room_id'=>2, 'type'=>'Family and Sharing Rooms',  'price'=>'450', 'dates'=>array(['2023-1-18', '2023-1-19'], ['2023-1-13', '2023-1-17'])],
        ['room_id'=>3, 'type'=>'Family and Sharing Rooms',  'price'=>'450',  'dates'=>array(['2023-1-16', '2023-1-17'], ['2023-1-25', '2023-1-27'])],
        ['room_id'=>4, 'type'=>'Family and Sharing Rooms',  'price'=>'450',  'dates'=>array(['2023-1-25', '2023-1-27'], ['2023-1-28', '2023-1-30'])],
        ['room_id'=>5, 'type'=>'Family and Sharing Rooms',  'price'=>'450',  'dates'=>array(['2023-1-12', '2023-1-14'], ['2023-1-22', '2023-1-23'])],
        ['room_id'=>6, 'type'=>'Classic Twin Room',  'price'=>'250',  'dates'=>array(['2023-1-12', '2023-1-16'], ['2023-2-14', '2023-1-16'])],
        ['room_id'=>7, 'type'=>'Classic Twin Room',  'price'=>'250',  'dates'=>array(['2023-1-3', '2023-1-7'], ['2023-1-24', '2023-1-28'])],
        ['room_id'=>8, 'type'=>'Classic Twin Room',  'price'=>'250',  'dates'=>array(['2023-1-1', '2023-1-2'], ['2023-1-26', '2023-1-28'])],
        ['room_id'=>9, 'type'=>'Classic Twin Room',  'price'=>'250',  'dates'=>array(['2023-1-18', '2023-1-19'], ['2023-1-22', '2023-1-23'])],
        ['room_id'=>10, 'type'=>'Classic Twin Room',  'price'=>'250',  'dates'=>array(['2023-1-12', '2023-1-15'], ['2023-1-24', '2023-1-27'])],
        ['room_id'=>11, 'type'=>'Classic Twin Room',  'price'=>'250',  'dates'=>array(['2023-1-1', '2023-1-5'], ['2023-1-23', '2023-1-25'])],
        ['room_id'=>12, 'type'=>'Classic Twin Room',  'price'=>'250',  'dates'=>array(['2023-1-6', '2023-1-10'], ['2023-1-22', '2023-1-23'])],
        ['room_id'=>13, 'type'=>'Classic Twin Room',  'price'=>'250',  'dates'=>array(['2023-1-8', '2023-1-12'], ['2023-1-14', '2023-1-18'])],
        ['room_id'=>14, 'type'=>'Classic Twin Room',  'price'=>'250',  'dates'=>array(['2023-1-13', '2023-1-15'], ['2023-1-22', '2023-1-23'])],
        ['room_id'=>15, 'type'=>'Classic Twin Room',  'price'=>'250',  'dates'=>array(['2023-1-9', '2023-1-11'], ['2023-1-14', '2023-1-17'])],
        ['room_id'=>16, 'type'=>'Classic Twin Room',  'price'=>'250',  'dates'=>array(['2023-1-16', '2023-1-19'], ['2023-1-23', '2023-1-27'])],
        ['room_id'=>17, 'type'=>'Classic Twin Room',  'price'=>'250',  'dates'=>array(['2023-1-4', '2023-1-5'], ['2023-1-12', '2023-1-16'])],
        ['room_id'=>18, 'type'=>'Classic Twin Room',  'price'=>'250',  'dates'=>array(['2023-1-11', '2023-1-13'], ['2023-1-15', '2023-1-18'])],
        ['room_id'=>19, 'type'=>'Classic Twin Room',  'price'=>'250',  'dates'=>array(['2023-1-12', '2023-1-15'], ['2023-1-19', '2023-1-23'])],
        ['room_id'=>20, 'type'=>'Classic Twin Room',  'price'=>'250',  'dates'=>array(['2023-1-3', '2023-1-8'], ['2023-1-25', '2023-1-30'])],
        ['room_id'=>21, 'type'=>'Deluxe Suite',  'price'=>'400',  'dates'=>array(['2023-1-5', '2023-1-7'], ['2023-1-12', '2023-1-17'])],
        ['room_id'=>22, 'type'=>'Deluxe Suite',  'price'=>'400',  'dates'=>array(['2023-1-6', '2023-1-10'], ['2023-1-12', '2023-1-13'])],
        ['room_id'=>23, 'type'=>'Deluxe Suite',  'price'=>'400',  'dates'=>array(['2023-1-15', '2023-1-18'], ['2023-1-22', '2023-1-23'])],
        ['room_id'=>24, 'type'=>'Deluxe Suite',  'price'=>'400',  'dates'=>array(['2023-1-17', '2023-1-20'], ['2023-1-28', '2023-1-30'])],
        ['room_id'=>25, 'type'=>'Deluxe Suite',  'price'=>'400',  'dates'=>array(['2023-1-8', '2023-1-12'], ['2023-1-16', '2023-1-19'])],
        ['room_id'=>26, 'type'=>'Deluxe Suite',  'price'=>'400',  'dates'=>array(['2023-1-12', '2023-1-15'], ['2023-1-18', '2023-1-22'])],
        ['room_id'=>27, 'type'=>'Deluxe Suite',  'price'=>'400',  'dates'=>array(['2023-1-15', '2023-1-19'], ['2023-1-20', '2023-1-23'])],
        ['room_id'=>28, 'type'=>'Deluxe Suite',  'price'=>'400',  'dates'=>array(['2023-1-13', '2023-1-14'], ['2023-1-15', '2023-1-19'])],
        ['room_id'=>29, 'type'=>'Deluxe Suite',  'price'=>'400',  'dates'=>array(['2023-1-4', '2023-1-7'], ['2023-1-9', '2023-1-1'])],
        ['room_id'=>30, 'type'=>'Deluxe Suite',  'price'=>'400',  'dates'=>array(['2023-1-1', '2023-1-5'], ['2023-1-7', '2023-1-9'])],
        ['room_id'=>31, 'type'=>'Deluxe Suite',  'price'=>'400',  'dates'=>array(['2023-1-12', '2023-1-17'], ['2023-1-22', '2023-1-26'])],
        ['room_id'=>32, 'type'=>'Deluxe Suite',  'price'=>'400',  'dates'=>array(['2023-1-11', '2023-1-14'], ['2023-1-17', '2023-1-20'])],
        ['room_id'=>33, 'type'=>'Deluxe Suite',  'price'=>'400',  'dates'=>array(['2023-1-2', '2023-1-4'], ['2023-1-11', '2023-1-13'])],
        ['room_id'=>34, 'type'=>'Deluxe Suite',  'price'=>'400',  'dates'=>array(['2023-1-14', '2023-1-18'], ['2023-1-22', '2023-1-27'])],
        ['room_id'=>35, 'type'=>'Deluxe Suite',  'price'=>'400',  'dates'=>array(['2023-1-9', '2023-1-10'], ['2023-1-15', '2023-1-18'])],
        ['room_id'=>36, 'type'=>'Classic King Room',  'price'=>'350',  'dates'=>array(['2023-1-16', '2023-1-19'], ['2023-1-22', '2023-1-28'])],
        ['room_id'=>37, 'type'=>'Classic King Room',  'price'=>'350',  'dates'=>array(['2023-1-12', '2023-1-15'], ['2023-1-22', '2023-1-25'])],
        ['room_id'=>38, 'type'=>'Classic King Room',  'price'=>'350',  'dates'=>array(['2023-1-6', '2023-1-8'], ['2023-1-10', '2023-1-14'])],
        ['room_id'=>39, 'type'=>'Classic King Room',  'price'=>'350',  'dates'=>array(['2023-1-11', '2023-1-14'], ['2023-1-18', '2023-1-21'])],
        ['room_id'=>40, 'type'=>'Classic King Room',  'price'=>'350',  'dates'=>array(['2023-1-17', '2023-1-21'], ['2023-1-24', '2023-1-29'])],
        ['room_id'=>41, 'type'=>'Classic King Room',  'price'=>'350',  'dates'=>array(['2023-1-11', '2023-1-14'], ['2023-1-20', '2023-1-23'])],
        ['room_id'=>42, 'type'=>'Classic King Room',  'price'=>'350',  'dates'=>array(['2023-1-18', '2023-1-19'], ['2023-1-24', '2023-1-29'])],
        ['room_id'=>43, 'type'=>'Classic King Room',  'price'=>'350',  'dates'=>array(['2023-1-16', '2023-1-19'], ['2023-1-22', '2023-1-25'])],
        ['room_id'=>44, 'type'=>'Classic King Room',  'price'=>'350',  'dates'=>array(['2023-1-13', '2023-1-16'], ['2023-1-17', '2023-1-18'])],
        ['room_id'=>45, 'type'=>'Classic King Room',  'price'=>'350',  'dates'=>array(['2023-1-7', '2023-1-11'], ['2023-1-25', '2023-1-28'])],
        ['room_id'=>46, 'type'=>'Classic King Room',  'price'=>'350',  'dates'=>array(['2023-1-3', '2023-1-5'], ['2023-1-7', '2023-1-10'])],
        ['room_id'=>47, 'type'=>'Classic King Room',  'price'=>'350',  'dates'=>array(['2023-1-17', '2023-1-19'], ['2023-1-22', '2023-1-26'])],
        ['room_id'=>48, 'type'=>'Classic King Room',  'price'=>'350',  'dates'=>array(['2023-1-1', '2023-1-4'], ['2023-1-7', '2023-1-11'])],
        ['room_id'=>49, 'type'=>'Classic King Room',  'price'=>'350',  'dates'=>array(['2023-1-12', '2023-1-14'], ['2023-1-16', '2023-1-18'])],
        ['room_id'=>50, 'type'=>'Classic King Room',  'price'=>'350',  'dates'=>array(['2023-1-18', '2023-1-19'], ['2023-1-22', '2023-1-23'])],
      


    ]
    
    
    ;

	$result = $collection->insertMany($rooms);
	echo "<h3>Inserted Rooms" . $result->getInsertedCount() . " new document(s): </h3>";
    







?>