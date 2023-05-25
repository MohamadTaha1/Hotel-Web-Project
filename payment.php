<?php 

include '.\base.php';
include '.\SessionSecurity.php';

require 'vendor/autoload.php';


use MongoDB\Client;
use MongoDB\Driver\Manager;


$client = new MongoDB\Client('mongodb://localhost:27017');



$username = $_SESSION["username"];

//echo $_SESSION["orderPrice"];
$errors = array();
if(isset($_POST["submit"])){

  $cardnumber = $_POST["cardnumber"];
  $cardname = $_POST["cardname"];
  $expmonth = $_POST["expmonth"];
  $expyear = $_POST["expyear"];
  $pin = $_POST["pin"];

  if(!preg_match("/^[0-9]{4}[- ]?[0-9]{4}[- ]?[0-9]{4}[- ]?[0-9]{4}$/",$cardnumber)){
    $errors[] = "Invalid card number";
  }

  if(!preg_match("/^[0-9]{4}$/", $pin)){
    $errors[] = "Invalid pin number";
  }

  if(!preg_match("/^[0-9]{4}$/", $expyear)){
    $errors[] = "Invalid Expiry Year";
  }

  if($expyear < date("Y")){
    $errors[] = "Your card is expired";
  }

  if($expyear == date("Y")){

  if($expmonth < date("m")){
          $errors[] = "Your card is expired";
  }
}

 
  if(empty($errors)){
    $present = false;
    $hashedcardnumber = password_hash($cardnumber, PASSWORD_BCRYPT);
    $hashedexpmonth = password_hash($expmonth, PASSWORD_BCRYPT);
    $hashedexpyear = password_hash($expyear, PASSWORD_BCRYPT);

    if(isset($_SESSION["orderPrice"]) || $_SESSION["bookPrice"]){

      $collection1 = $client->Hotel->Payment;
      $result = $collection1->find(["username" => "$username",
      "cardName" => "$cardname"]);

      if($result){
      foreach($result as $mongoid=>$doc){
          $test1 = password_verify($cardnumber,$doc['cardNumber']);
          if($test1){
            $present = true;
            break;
           }
    }
  }
  
  if($present == false){
    $result2 = $collection1->insertOne(["username" => "$username", "cardNumber" => "$hashedcardnumber", 
            "cardName" => "$cardname", "expMonth" => "$hashedexpmonth", "expYear" => "$hashedexpyear"]);

  }


    if(isset($_SESSION["orderPrice"])){
      $orderPrice = $_SESSION["orderPrice"];
      $orders = $_SESSION['orders'];
      $time = $_SESSION['time'];

      $collectionBook = $client->Hotel->Booking;
      $roomBooked = $collectionBook->findOne(['username' => $_SESSION['username']]);
      $roomId = $roomBooked['room_ids'][0];

      $collection1 = $client->Hotel->Order;
      $result = $collection1->insertOne(["total" => "$orderPrice", "room_id" => "$roomId",
       "username" => "$username", "order" => "$orders", "orderTime" => "$time", "status" => "Pending"]);
    }


    if(isset($_SESSION["bookPrice"])){
      # echo $_SESSION["bookPrice"];
      $room_ids_king = array();
      $room_ids_twin = array();
      $room_ids_deluxe = array();
      $room_ids_family = array();
      $collection10 = $client->Hotel->Room;
      $json = file_get_contents('bookings.json');

      $tempArray = json_decode($json);

      for($i = 0; $i < count($tempArray); $i++){
        if($tempArray[$i]->username == $_SESSION['username']){
          #echo $tempArray[$i]->username;
          $checkedIn = $tempArray[$i]->checkedIn;
          $checkedOut = $tempArray[$i]->checkedOut;
          $date = array($checkedIn, $checkedOut);

          $cin = strtotime($tempArray[$i]->checkedIn);
          $cout = strtotime($tempArray[$i]->checkedOut);

          $King = (integer) $tempArray[$i]->King;
          $Twin = (integer) $tempArray[$i]->Twin;
          $Deluxe = (integer) $tempArray[$i]->Deluxe;
          $Family = (integer) $tempArray[$i]->Family;

          $adults = $tempArray[$i]->adults;
          $children = $tempArray[$i]->children;
          $TotalPrice = $tempArray[$i]->TotalPrice;
          
          // If King Room
          if($King > 0){
           
            $result = $collection10->find(['type' => 'Classic King Room']);

            foreach($result as $mongoid => $doc) {
              //  echo $doc['dates'][0]."<br>";
             // echo $doc['dates'][0][0]."<br>"; 
              //echo $doc['dates'][0][1]."<br>"; 
            //  echo "janananaanan";
              $flag = false;
   
              for($i=0; $i < count($doc['dates']) ;$i++){
              
   
               $startBooked = strtotime($doc['dates'][$i][0]);
               
               $endBooked = strtotime($doc['dates'][$i][1]);
              
            //  echo $startBooked;
               if( ($cin > $startBooked && $cin < $endBooked) || 
               ($cout < $endBooked && $cout > $startBooked) ||
               ($cin < $startBooked && $cout > $endBooked) ||
               ($cin == $startBooked) || ($cout == $endBooked)
               ){
                $flag = true;
                break;
               }
          }

          if($flag == false){
           // echo $King;
            $room_ids_king[] = $doc['room_id'];
            $King--;
            if($King == 0)
            break;
          }
        }

        for($i = 0; $i < count($room_ids_king); $i++){
          $collection10->updateOne(["room_id" => $room_ids_king[$i]], [ '$push' => [ "dates" => $date ] ] );
      }

    }

    // If Twin Room

    if($Twin > 0){
           
      $result = $collection10->find(['type' => 'Classic Twin Room']);

      foreach($result as $mongoid => $doc) {
        //  echo $doc['dates'][0]."<br>";
       // echo $doc['dates'][0][0]."<br>"; 
        //echo $doc['dates'][0][1]."<br>"; 
      //  echo "janananaanan";
        $flag = false;

        for($i=0; $i < count($doc['dates']) ;$i++){
        

         $startBooked = strtotime($doc['dates'][$i][0]);
         
         $endBooked = strtotime($doc['dates'][$i][1]);
        
      //  echo $startBooked;
         if( ($cin > $startBooked && $cin < $endBooked) || 
         ($cout < $endBooked && $cout > $startBooked) ||
         ($cin < $startBooked && $cout > $endBooked) ||
         ($cin == $startBooked) || ($cout == $endBooked)
         ){
          $flag = true;
          break;
         }
    }

    if($flag == false){
     // echo $King;
      $room_ids_twin[] = $doc['room_id'];
      $Twin--;
      if($Twin == 0)
      break;
    }
  }

  for($i = 0; $i < count($room_ids_twin); $i++){
    $collection10->updateOne(["room_id" => $room_ids_twin[$i]], [ '$push' => [ "dates" => $date ] ] );
}

}

   // If DEluxe Rooms

   if($Deluxe > 0){
           
    $result = $collection10->find(['type' => 'Deluxe Suite']);

    foreach($result as $mongoid => $doc) {
      //  echo $doc['dates'][0]."<br>";
     // echo $doc['dates'][0][0]."<br>"; 
      //echo $doc['dates'][0][1]."<br>"; 
    //  echo "janananaanan";
      $flag = false;

      for($i=0; $i < count($doc['dates']) ;$i++){
      

       $startBooked = strtotime($doc['dates'][$i][0]);
       
       $endBooked = strtotime($doc['dates'][$i][1]);
      
    //  echo $startBooked;
       if( ($cin > $startBooked && $cin < $endBooked) || 
       ($cout < $endBooked && $cout > $startBooked) ||
       ($cin < $startBooked && $cout > $endBooked) ||
       ($cin == $startBooked) || ($cout == $endBooked)
       ){
        $flag = true;
        break;
       }
  }

  if($flag == false){
   // echo $King;
    $room_ids_deluxe[] = $doc['room_id'];
    $Deluxe--;
    if($Deluxe == 0)
    break;
  }
}

for($i = 0; $i < count($room_ids_deluxe); $i++){
  $collection10->updateOne(["room_id" => $room_ids_deluxe[$i]], [ '$push' => [ "dates" => $date ] ] );
}

}

// If Family Room 

if($Family > 0){
           
  $result = $collection10->find(['type' => 'Family and Sharing Rooms']);

  foreach($result as $mongoid => $doc) {
    //  echo $doc['dates'][0]."<br>";
   // echo $doc['dates'][0][0]."<br>"; 
    //echo $doc['dates'][0][1]."<br>"; 
  //  echo "janananaanan";
    $flag = false;

    for($i=0; $i < count($doc['dates']) ;$i++){
    

     $startBooked = strtotime($doc['dates'][$i][0]);
     
     $endBooked = strtotime($doc['dates'][$i][1]);
    
  //  echo $startBooked;
     if( ($cin > $startBooked && $cin < $endBooked) || 
     ($cout < $endBooked && $cout > $startBooked) ||
     ($cin < $startBooked && $cout > $endBooked) ||
     ($cin == $startBooked) || ($cout == $endBooked)
     ){
      $flag = true;
      break;
     }
}

if($flag == false){
 // echo $King;
  $room_ids_family[] = $doc['room_id'];
  $Family--;
  if($Family == 0)
  break;
}
}

for($i = 0; $i < count($room_ids_family); $i++){
$collection10->updateOne(["room_id" => $room_ids_family[$i]], [ '$push' => [ "dates" => $date ] ] );
}

}

   
// Add to bookings collection

$collection11 = $client->Hotel->Booking;

$allRoomIds = array_merge($room_ids_king, $room_ids_twin, $room_ids_family, $room_ids_deluxe);

$collection11->insertOne(["username" => $username ,"room_ids" => $allRoomIds, "checkedIn" => $checkedIn, "checkedOut" => $checkedOut,
"children" => $children, "adults" => $adults, "TotalPrice" => $TotalPrice]);


#unset($tempArray[$i]);
/*
$tempArray = array_values($tempArray);

$jsonData = json_encode($tempArray);

file_put_contents('bookings.json', $jsonData);*/


  }






}

for($i = 0; $i < count($tempArray); $i++){
  if($tempArray[$i]->username == $_SESSION['username']){
    unset($tempArray[$i]);
    $tempArray = array_values($tempArray);

    $jsonData = json_encode($tempArray);

    file_put_contents('bookings.json', $jsonData);
  }
}



}
}
}
};
  
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="payment.css">
    <link rel="stylesheet" href="forms.css">

    <script src="book.js"> </script>
    <title>Home Page</title>
</head>
<body>
   
    
<?php include './nav.php'?>

   <div id = "pay" style="position: absolute; top:75%;"> </div>
   
   <div> 
    <?php
    foreach($errors as $error){
    echo "<div class='errors' style='width:30%; margin-top:2ex'> $error </div>";
    }
    ?> 
    </div>

    <div class="container">
      <form action="#" method="post" style="display: flex;">
      
          <div class = "divv">
           
            <h3 >Billing Address</h3>
            <label><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="Fname" name="firstname" placeholder="Khaleel Mershad">
            
            <label><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="khalil@example.com">
            
            <label><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adress" name="address" placeholder="Hamra str.">
            
            <label><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Beirut">


            <label id="zip">Zip</label>
            <input type="text" id="zip" name="zip" placeholder="0000">
              
          </div>

          <div class = "divv" >
            <h3>Payment</h3>
            <label>Accepted Cards</label>
            <div class="icons">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label>Name on Card</label>
            <input type="text" id = "nameOfcard" name="cardname" placeholder="Khaleel Mershadi" required>
            
            <label>Credit card number</label>
            <input id = "cardNb" type="text" name="cardnumber" placeholder="#### #### #### #### (4-4-4-4)" required>
            
            <label>Exp Month</label>
            <input id = "expM" type="number" name="expmonth" placeholder="1 - 12" min = "1" max = "12" required>

              
            <label>Exp Year</label>
            <input id = "expY" type="text" name="expyear" placeholder="2024" required>

            <label>Pin</label>
            <input id = "pin" type="password" name="pin" placeholder="****" required>
            <br>
            <input type="submit" name = "submit" value="Confirm Booking" class="View">            
            
        
              
          </div>
          
          
        </form>
      </div>
    



      <?php include './footer.php'?>
    


    
</body>


</html>