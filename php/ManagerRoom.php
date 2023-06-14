<?php
      include './base.php';
      require 'vendor/autoload.php';

      use MongoDB\Client;
      use MongoDB\Driver\Manager;


       $client = new MongoDB\Client('mongodb://localhost:27017');

       $collection = $client->Hotel->Room;
       
       
        $json = file_get_contents('php://input');

        // $json = '{"roomId":"1","type":"Family and Sharing Rooms",
         //   "price":"120","dates":"[[\"2023-1-25\",\"2023-1-29\"]]"}';

         $data = json_decode($json);

         $newDates = json_decode($data->dates);
         

         $result = $collection -> updateOne(['room_id' => (integer)$data->roomId] 
         ,['$set'=>["price" => $data->price, "type" => $data->type, "dates" => $newDates]], ['multi' => true]);



         ?>