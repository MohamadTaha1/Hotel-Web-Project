<?php
      include './base.php';
      require 'vendor/autoload.php';

      use MongoDB\Client;
      use MongoDB\Driver\Manager;


       $client = new MongoDB\Client('mongodb://localhost:27017');

       $collection = $client->Hotel->Task;
       
       
        $json = file_get_contents('php://input');

        // $json = '{"roomId":"1","type":"Family and Sharing Rooms",
         //   "price":"120","dates":"[[\"2023-1-25\",\"2023-1-29\"]]"}';

         $data = json_decode($json);
         

         $result = $collection -> InsertOne([ 'employee_id' => $data->employee_id, 'name' => $data->name ,'task' => $data->task , 'shift'=>$data->shift , 'days'=>$data->days]);

         ?>