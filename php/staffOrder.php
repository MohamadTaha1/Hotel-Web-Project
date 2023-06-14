<?php
      include './base.php';
      require 'vendor/autoload.php';

      use MongoDB\Client;
      use MongoDB\Driver\Manager;


       $client = new MongoDB\Client('mongodb://localhost:27017');

       $collection = $client->Hotel->Order;
       
       
       $json = file_get_contents('php://input');

        // $json = '{"type" : "update","total":"10","username":"alo123",
        //    "room":"45","order":" Harissa spiced olives Smoked almonds",
        //     "orderTime":"19:45","status":"Pending"}'; 

         $data = json_decode($json);

       // var_dump( $data);

          if($data->type == 'delete') {

             $result = $collection -> deleteOne(['username' => $data->username, 'order' => $data->order,
            'room_id' => $data->room, 'orderTime' => $data->orderTime, 'status' => $data->status, 
            'total' => $data->total]);
          }

          if($data->type == 'update') {
            $result = $collection -> updateOne(['username' => $data->username,'room_id' => $data->room,
            'orderTime' => $data->orderTime, 'total' => $data->total, 'order' => $data->order] 
            ,['$set'=>["status" => "done"]], ['multi' => true]);
          }


         /* 'total' => $data->total,
        'room_id' => $data->room, 'order' => $data->order, 'orderTime' => $data->orderTime,
    'status' => $data->status]);*/
         
    
?>