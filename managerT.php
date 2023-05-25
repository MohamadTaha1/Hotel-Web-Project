<?php
if (isset($_POST['delete'])){
    require 'vendor/autoload.php';


    $client = new MongoDB\Client(
        'mongodb://localhost:27017');
    $collectionTask = $client->Hotel->Task;

    $collectionTask->drop();

   // unset($_POST['delete']);

    header('location:manager.php');

}


?>