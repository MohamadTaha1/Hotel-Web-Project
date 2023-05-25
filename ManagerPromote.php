<?php
require 'vendor/autoload.php';


$client = new MongoDB\Client(
    'mongodb://localhost:27017');
$collectionPromote = $client->Hotel->Employee;

$json = file_get_contents('php://input');


$data = json_decode($json);


$result = $collectionPromote->updateOne(["employee_id" => $data->EID], ['$set' => ["position" => $data->position]]);

?>