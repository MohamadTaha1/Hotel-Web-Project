<?php
        include "./base.php";

        

        $json = file_get_contents('php://input');
        
        #$_SESSION["ALO"] = $json;
      #  $json = '{"DateList":["2023-1-22","2023-1-25"]}'; # TO BE DELETED
        
       

        $data = json_decode($json);
        require 'vendor/autoload.php';

        //$_SESSION["ALO"] = $data->DateList[0];

       /* $start = $data->DateList[0];
        $end = $data->DateList[1];

        echo strtotime($start)."<br><br>";
        echo strtotime($end)."<br><br>";

        echo strtotime($start) - strtotime($end);*/

        

        use MongoDB\Client;
        use MongoDB\Driver\Manager;


        $client = new MongoDB\Client(
            'mongodb://localhost:27017');
        
        $collection = $client->Hotel->Room;

       
        $counterFamily = 0;
        $counterTwin = 0;
        $counterDeluxe = 0;
        $counterKing = 0;

       # for($i = 1; $i < 6; $i++){
              
        # $result1 = $collection->find();
      # ["room_id"=>['$lt' => 6]]
         $result1 = $collection->find(['room_id' => ['$lt' => 6,]]);
         $result2 = $collection->find(['room_id' => ['$gt' => 5,'$lt'=>21]]);
         $result3 = $collection->find(['room_id' => ['$gt' => 20,'$lt'=>36]]);
         $result4 = $collection->find(['room_id' => ['$gt' => 35,'$lt'=>51]]);


        # if($result1){
        #    $counterFamily+=1;
        # }
        $startRequest = strtotime($data->DateList[0]);
        $endRequest = strtotime($data->DateList[1]);

    



        foreach($result1 as $mongoid => $doc) {
           //  echo $doc['dates'][0]."<br>";
          // echo $doc['dates'][0][0]."<br>"; 
           //echo $doc['dates'][0][1]."<br>"; 

           for($i=0; $i < count($doc['dates']) ;$i++){

            $startBooked = strtotime($doc['dates'][$i][0]);
            
            $endBooked = strtotime($doc['dates'][$i][1]);
           

            if( ($startRequest > $startBooked && $startRequest < $endBooked) || 
            ($endRequest < $endBooked && $endRequest > $startBooked) ||
            ($startRequest < $startBooked && $endRequest > $endBooked) ||
            ($startRequest==$startBooked) || ($endRequest == $endBooked)
            ){
               $counterFamily+=1;
               
               break;
            }

           }
        
        }

        foreach($result2 as $mongoid => $doc) {
         //  echo $doc['dates'][0]."<br>";
        // echo $doc['dates'][0][0]."<br>"; 
         //echo $doc['dates'][0][1]."<br>"; 

         for($i=0; $i < count($doc['dates']) ;$i++){

          $startBooked = strtotime($doc['dates'][$i][0]);
         
          $endBooked = strtotime($doc['dates'][$i][1]);
         

          if( ($startRequest > $startBooked && $startRequest < $endBooked) || 
          ($endRequest < $endBooked && $endRequest > $startBooked) ||
          ($startRequest < $startBooked && $endRequest > $endBooked) ||
          ($startRequest==$startBooked) || ($endRequest == $endBooked)
          ){
             $counterTwin+=1;
             
             break;
          }

         }
      
      }

      foreach($result3 as $mongoid => $doc) {
         //  echo $doc['dates'][0]."<br>";
        // echo $doc['dates'][0][0]."<br>"; 
         //echo $doc['dates'][0][1]."<br>"; 

         for($i=0; $i < count($doc['dates']) ;$i++){

          $startBooked = strtotime($doc['dates'][$i][0]);
         
          $endBooked = strtotime($doc['dates'][$i][1]);
    

          if( ($startRequest > $startBooked && $startRequest < $endBooked) || 
          ($endRequest < $endBooked && $endRequest > $startBooked) ||
          ($startRequest < $startBooked && $endRequest > $endBooked) ||
          ($startRequest==$startBooked) || ($endRequest == $endBooked)
          ){
             $counterDeluxe+=1;
         
             break;
          }

         }
      
      }

      foreach($result4 as $mongoid => $doc) {
         //  echo $doc['dates'][0]."<br>";
        // echo $doc['dates'][0][0]."<br>"; 
         //echo $doc['dates'][0][1]."<br>"; 

         for($i=0; $i < count($doc['dates']) ;$i++){

          $startBooked = strtotime($doc['dates'][$i][0]);
        
          $endBooked = strtotime($doc['dates'][$i][1]);
        

          if( ($startRequest > $startBooked && $startRequest < $endBooked) || 
          ($endRequest < $endBooked && $endRequest > $startBooked) ||
          ($startRequest < $startBooked && $endRequest > $endBooked) ||
          ($startRequest==$startBooked) || ($endRequest == $endBooked)
          ){
             $counterKing+=1;
            
             break;
          }

         }
      
      }

        
      #}

      /* for($i = 6; $i < 21; $i++){
              
        $result1 = $collection->findOne(["room_id"=>"$i", "dates"=>array('$in'=> $data->DateList)]);
        if($result1){
           $counterTwin+=1;
        }
       
      }

      for($i = 21; $i < 36; $i++){
              
        $result1 = $collection->findOne(["room_id"=>"$i", "dates"=>array('$in'=> $data->DateList)]);
        if($result1){
           $counterDeluxe+=1;
        }
       
      }

      for($i = 36; $i < 51; $i++){
         
        $result1 = $collection->findOne(["room_id"=>"$i", "dates"=>array('$in'=> $data->DateList)]);
        if($result1){
           $counterKing+=1;

        }
       
      }
*/
      $counters = Array();
      $counters[0] = 5 - $counterFamily;
      $counters[1] = 15 - $counterTwin;
      $counters[2]= 15 - $counterDeluxe;
      $counters[3] = 15 - $counterKing;



    #   $_SESSION["result3"] = $counters[0] . " " . $counters[1] . " " . $counters[2] . " " . $counters[3] . " " ;

        $counters = [ "Family"=> $counters[0] ,"Twin"=> $counters[1], "Deluxe"=>  $counters[2], "King"=>  $counters[3]];
       
        $encodedCounters = json_encode($counters);
        $decodedCounters = json_decode($encodedCounters);

        $data_results = file_get_contents('availableRooms.json');
        $tempArray = json_decode($data_results, true);
        
        
       # $jsonCounter = json_decode($jsonCounter,true);
        
        $tempArray[0] = $decodedCounters;
        
        $jsonData = json_encode($tempArray);

        

         file_put_contents('availableRooms.json', $jsonData);
        
      ?>