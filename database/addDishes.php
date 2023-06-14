<?php


require 'vendor/autoload.php';

use MongoDB\Client;
use MongoDB\Driver\Manager;


$client = new MongoDB\Client(
    'mongodb://localhost:27017');
$db = $client->test;
var_dump($db);

$collection = $client->Hotel->Dish;
	
    
$Dish = [["id" => "1", "name"=>"Harissa spiced olives", "price"=>5],
["id" => "2", "name"=>"Smoked almonds", "price"=>5],
["id" => "3", "name"=>"Crispy BBQ chicken wings", "price"=>12],
["id" => "4", "name"=>"Falafels, red pepper & walnut paste", "price"=>9],
["id" => "5", "name"=>"Sweet Beets- Beetroot, Carrot, Orange, Fennel, and Feta", "price"=>14],
["id" => "6", "name"=>"Classic Caesar- Crisp Baby Gem, Bacon, Croutons & Parmesan Cheese", "price"=>13],
["id" => "7", "name"=>"Beef burger with bacon, cheese, house relish & fries", "price"=>18],
["id" => "8", "name"=>"Crispy chicken burger, slaw, BBQ sauce & fries", "price"=>18],
["id" => "9", "name"=>"Fries", "price"=>5],
["id" => "10", "name"=>"Onion rings", "price"=>5],
["id" => "11", "name"=>"Chocolate bread & butter pudding, vanilla ice cream", "price"=>9],
["id" => "12", "name"=>"Lemon meringue posset, raspberry gel", "price"=>9]

];

$result = $collection->insertMany($Dish);







?>