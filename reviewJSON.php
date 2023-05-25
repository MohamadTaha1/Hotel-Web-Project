<?php
      include './base.php';
        $json = file_get_contents('php://input');

        $data = json_decode($json);

/*
        $json = str_replace("{","",$json);
        $json = str_replace("}","",$json);
        $json = str_replace(":"," ",$json);
        $json = str_replace("\"","",$json);
        $json = explode(",",$json);

        $nameValue = str_replace("name ","",$json[0]);
        $starValue = str_replace("star ","",$json[1]);
        $reviewMessageValue = str_replace("reviewMessage ","",$json[2]);

        $json2 = ["name" => $nameValue, "star" => $starValue, "reviewMessage" => $reviewMessageValue];

        */

        require 'vendor/autoload.php';

        use MongoDB\Client;
        use MongoDB\Driver\Manager;


        $client = new MongoDB\Client(
            'mongodb://localhost:27017');
       
      

        $collection = $client->Hotel->Review;
     
        $result = $collection->insertOne(['name' => $data->name, 'star' => $data->star,
         'reviewMessage' => $data->reviewMessage]);
         
       
?>