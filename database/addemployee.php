<?php


require 'vendor/autoload.php';

use MongoDB\Client;
use MongoDB\Driver\Manager;


$client = new MongoDB\Client(
    'mongodb://localhost:27017');
$db = $client->test;
var_dump($db);

$collection = $client->Hotel->Employee;
	
    
    echo "<h1>Inserting a New Item: \"IPhone X\" into the Products collection</h1>";
    $Employee = [

        ['employee_id' => '1', 'name'=>'Rissal', 'family_name'=>'Hedna', 'city'=>'Beirut', 'address' => 'Hazmieh/Street25', 'phone' => '70654055', 'email' => 'RissalHedna@gmail.com', 'username' => 'hedna', 'password'=>'Hedna@14', 'position'=>'manager', 'salary'=>6000],
        
        ['employee_id' => '2', 'name'=>'Dana', 'family_name'=>'Nasr', 'city'=>'Beirut', 'address' => 'Verdun/Street4', 'phone' => '70875120', 'email' => 'D.Nasr@gmail.com', 'username'=>'Dana1', 'password'=>'Dana.#20', 'position'=>'manager', 'salary'=>6000],
        
        ['employee_id' => '3', 'name'=>'Yara', 'family_name'=>'Harb', 'city'=>'Beirut', 'address' => 'Kraytem/Street12', 'phone' => '81342987', 'email' => 'Yara1@gmail.com', 'username'=>'yara', 'password'=>'Yara.999', 'position'=>'manager', 'salary'=>6000],
        
        ['employee_id' => '4', 'name'=>'Mohammad', 'family_name'=>'Shamas', 'city'=>'Beirut', 'address' => 'Dahyieh/Street60', 'phone' => '81306793', 'email' => 'Shamas@gmail.com', 'username'=>'Shamas2', 'password'=>'moe~2002', 'position'=>'Accounting', 'salary'=>3500],
        
        ['employee_id' => '5', 'name'=>'Robert', 'family_name'=>'Robin', 'city'=>'Beirut', 'address' => 'Jbeil/Street34', 'phone' => '76543205', 'email' => 'RoundRobin@gmail.com', 'username'=>'robin3', 'password'=>'robert@1', 'position'=>'Janitor', 'salary'=>1000],
        
        ['employee_id'=>'6' , 'name' => 'Cezar', 'family_name'=>'Ashkar' , 'city'=>'Nabatieh', 'address'=>'Mayfadoun/Mallouleh street','phone'=>'03846256', 'email'=>'cezar.ashkar@gmail.com', 'username'=>'cezar' , 'password'=>'faReed@13' , 'position' => 'secretary', 'salary'=>3000],
        
        ['employee_id'=>'7' , 'name' => 'Yasmina', 'family_name'=>'Elayash' , 'city'=>'Saida', 'address'=>'Sayoudye street','phone'=>'79175075', 'email'=>'yasmina.elayash@gmail.com', 'username'=>'yasmina' , 'password'=>'taYoube$77' , 'position' => 'Chef', 'salary'=>4000],
        
        ['employee_id'=>'8' , 'name' => 'Maya', 'family_name'=>'Darwich' , 'city'=>'Tyre', 'address'=>'Sea side street','phone'=>'71102361', 'email'=>'maya.darwich@gmail.com', 'username'=>'maya' , 'password'=>'Cambayouter^7' , 'position' => 'Janitor', 'salary'=>1000],
        
        ['employee_id'=>'9' , 'name' => 'Hassan', 'family_name'=>'Jaber' , 'city'=>'Nabatieh', 'address'=>'Maifadoun Main street','phone'=>'03821766', 'email'=>'hassan.jaber@gmail.com', 'username'=>'hassan' , 'password'=>'SouKa09' , 'position' => 'Runner', 'salary'=>1500],
        
        ['employee_id'=>'10' , 'name' => 'Farah', 'family_name'=>'Jaber' , 'city'=>'Jbeil', 'address'=>'Jbeil street 35','phone'=>'03525654', 'email'=>'farah.jaber@gmail.com', 'username'=>'farah' , 'password'=>'DiDi@34' , 'position' => 'Accounting', 'salary'=>3500]
        
                     
    ];

	$result = $collection->insertMany($Employee);
	echo "<h3>Inserted Employees " . $result->getInsertedCount() . " new document(s): </h3>";
    







?>