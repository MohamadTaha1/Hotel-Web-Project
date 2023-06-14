<?php


require 'vendor/autoload.php';

use MongoDB\Client;
use MongoDB\Driver\Manager;


$client = new MongoDB\Client(
    'mongodb://localhost:27017');
$db = $client->test;
var_dump($db);

$collection = $client->Hotel->User;
	
    
    echo "<h1>Inserting a New Item: \"IPhone X\" into the Products collection</h1>";
    $users = [
    [ 'user_id' => 1, 'name' => 'Mohamad' ,'family_name' => 'Taha' , 'city'=>'Beirut' , 'address'=>'Hamra', 'phone' => '81611436' , 'email' => 'mohamad.taha@gmail.com' ,'username'=>'taha' , 'password'=>'taha123' ],
    ['user_id' => 2, 'name' => 'Jana' ,'family_name' => 'Jaber' , 'city'=>'Beirut' , 'address'=>'Hamra', 'phone' => '81615536' , 'email' => 'jana.jaber@gmail.com' ,'username'=>'jana' , 'password'=>'jana123' ],
    ['user_id' => 3, 'name' => 'Hadi' ,'family_name' => 'Bazzi' , 'city'=>'Beirut' , 'address'=>'Hamra', 'phone' => '81611438' , 'email' => 'hadi.bazzi@gmail.com' ,'username'=>'hadi' , 'password'=>'hadi123' ],
    ];

	$result = $collection->insertMany($users);
	echo "<h3>Inserted Users " . $result->getInsertedCount() . " new document(s): </h3>";
    







?>