<?php
      include './base.php';
      require 'vendor/autoload.php';

      use MongoDB\Client;
      use MongoDB\Driver\Manager;


       $client = new MongoDB\Client('mongodb://localhost:27017');

       $collection = $client->Hotel->Maintenance;
       
       
       $json = file_get_contents('php://input');

    //   $json = '{"func":"delete","location":"Main Lobby","type":"Air conditioning","status":"done"}';


         $data = json_decode($json);

       // var_dump( $data);

          if($data->func == 'delete') {
          
             $result = $collection -> deleteOne(['location' => $data->location, 'type' => $data->type]);
          }

          if($data->func == 'update') {
           
            $result = $collection -> updateOne(['location' => $data->location, 'type' => $data->type],
            ['$set'=>["status" => "done"]], ['multi' => true]);
         }

         if($data->func == 'add') {
           
            $result = $collection -> insertOne(["location"=>$data->location, "type"=>$data->type, "status"=>$data->status]);
         }

         
    
?>