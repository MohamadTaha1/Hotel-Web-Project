<?php
      include './base.php';
          $json = file_get_contents('php://input');
          $data = json_decode($json, true);

         
         $data_results = file_get_contents('bookings.json');
         $tempArray = json_decode($data_results);
         
         //$_SESSION["fet"] = "FET!";
      


         if(!empty($tempArray)){
         for($i = 0; $i < count($tempArray); $i++){
            
            if($tempArray[$i]->username == $_SESSION["username"]){
              //  $_SESSION["fet"] = "hadiiiiiii";
                unset($tempArray[$i]);
               
            }
         }
         $tempArray = array_values($tempArray);
        }



       // $tempArray = array_values($tempArray);

         
         $tempArray[] = $data;
         $jsonData = json_encode($tempArray);

         file_put_contents('bookings.json', $jsonData);

         $_SESSION["bookPrice"] = "yes";

         #header("Location:payment.php#pay");
        
       
?>