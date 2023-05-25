<?php include 'base.php';

require 'vendor/autoload.php';

use MongoDB\Client;
use MongoDB\Driver\Manager;


$client = new MongoDB\Client('mongodb://localhost:27017');

$collection = $client->Hotel->Dish;

if(isset($_POST["submitOrder"])){
$total=0;
$orders = "";
for($i = 1; $i<13; $i++){
$dish = $_POST["$i"];
if($dish > 0){
//$price = $collection->findOne(["id"=>"$i"], ["projection" => array("price" => 1)]);

$result = $collection->findOne(["id"=>"$i"]);
$order = $result["name"];
$price = $result["price"];
$mydate=getdate(date("U"));
$time = "$mydate[hours]:$mydate[minutes]";

$orders= $orders." ".$order;
$total += (integer)$price * (integer)$dish;

//$total += (integer)$price["price"] * (integer)$dish;

}

}

$_SESSION["orderPrice"] = $total;
$_SESSION["orders"] = $orders;
$_SESSION["time"] = $time;


header("Location: payment.php#pay");

}



?>

