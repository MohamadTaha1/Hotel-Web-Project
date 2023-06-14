<?php
require 'vendor/autoload.php';
use MongoDB\Client;
use MongoDB\Driver\Manager;

$client = new MongoDB\Client(
    'mongodb://localhost:27017');

session_start();

// For Cookies
if(isset($_COOKIE['username'])){
   $name = $_COOKIE['username'];
}
else{
    $name = "";
}
//////


$loggedIn = false;


if (isset($_SESSION['username'])){
    $loggedIn = true;
    $collection = $client->Hotel->Booking;
   $result = $collection->findOne(['username' => $_SESSION['username']]);
   if($result){
    $_SESSION['hasRoom'] = "Book";
 
   }
  
}


if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("Location: HomePage.php");
    die();
}
?>