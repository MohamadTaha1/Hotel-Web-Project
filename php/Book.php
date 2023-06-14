
<?php 

include '.\base.php';
include '.\SessionSecurity.php';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/book.css">
    <link rel="stylesheet" href="../css/Forms.css">
    <script src='../js/jquery-3.6.0.js'></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Book Now</title>
   <script src="../js/book.js"> </script>
</head>
<body>
   
<?php include './nav.php'?>

<div id = "form" style = "position: absolute; bottom: 25%;"> </div>


<div class="BookForm" >
<form action="" method="" id = "FORM" onsubmit="return false">
 
  <div class="input section1">
  
   <div  class="section1-1">
    <p  class="name" style="margin-bottom: 2ex; margin-left: 4ex;"> Name </p>
    <p class="phone" style="margin-top: 2ex; margin-left: 6ex;"> Phone Number </p>
  </div>
   
    <div class="section1-2">
  <input type="text" name="guest_name" placeholder="Jana Jaber" class = "textInput" required>

  <input type="tel" name = "telNb"  placeholder="(00###) ##-######" class = "textInput phoneNb" required size = "25">
  </div>
  
 
</div>
  
  <hr style="color: goldenrod; border: 1px solid;">
  
   <div class="input" style="display: inline-block;">
    <label>Check-in Date</label>
    <input type="date" id="checkIn" name="check-in" class = "textInput" required>
  
    <label>Check-out Date</label>
    <input type="date" id="checkOut" name="check-out" class = "textInput" required>
  </div>
  
  <div class="input" style="display: inline-block;">
    <label>Adults</label>
    <input type="number" name="nb_adults" placeholder="2" min="1" max = "4" class = "textInput" required id = "adults">
  
    <label>Children</label>
    <input type="number" name="nb_children" placeholder="0" min="0"  max="4" class = "textInput" required id = "children">

    <input type="hidden" value="<?php echo $_SESSION["username"]; ?>" id ="username">
  </div>
  
  
  
  <hr style="color: goldenrod; border: 1px solid;">
  
  
  <a><input class = "view" type="submit" value="View Available Rooms" id = "btn"></a>
  
</form>

    </div>
    
    
    <div class = "displayRooms" id = "show">
      
       <div class="room">
           <div> <img src = "../images/king4.jpg" width="500px" height="250px"> </div>
           <div style=" text-align: center; display: flex; flex-direction:column;">
              
               <div class = "RoomTitle" id = "roomName1"> Classic King Room</div>
               
               <div class="pay"> <span style="font-weight: 900;" id = "price1"> 350</span>$ Per Night</div>
             
              <div class="button input2"> Number of Rooms: <input type = "number" value="0" min = "0" max = "15" id = "number1"> </div>
              
              <div class="button input2" style="margin-left: 42%; display: inline-flex;"> 
              <div>Select: &ensp;</div>
              <div><input type = "checkbox" name = "roomType" value = "king" id = "check1" class = "checkbox"></div>
              </div>
               
               
               
           </div>
       </div>
       
       <hr>
       
       <div class="room">
           <div> <img src = "../images/twin4.jpg" width="500px" height="250px"> </div>
           <div style=" text-align: center; display: flex; flex-direction:column;">
              
               <div class = "RoomTitle" id = "roomName2"> Classic Twin Room</div>
               <div class="pay"> <span style="font-weight: 900;" id = "price2"> 250</span><b>$</b> Per Night</div>
               
               <div class="button input2"> Number of Rooms: <input type = "number" value="0" min = "0" max = "15" id = "number2"> </div>
              
              <div class="button input2" style="margin-left: 42%; display: inline-flex;"> 
              <div>Select: &ensp;</div>
              <div><input type = "checkbox" name = "roomType" value = "king" id = "check2" class = "checkbox"></div>
              </div>
               
           </div>
       </div>
       
       <hr>
       
       <div class="room" >
           <div > <img src = "../images/deluxe5.jpg" width="500px" height="250px" > </div>
           <div  style=" text-align: center; display: flex; flex-direction:column;">
               <div class = "RoomTitle" id = "roomName3" > Deluxe Suite</div>
               <div class="pay"> <span style="font-weight: 900;" id = "price3"> 400</span><b>$</b> Per Night</div>
               
               <div class="button input2"> Number of Rooms: <input type = "number" min = "0" value="0" max = "15" id = "number3"> </div>
              
              <div class="button input2" style="margin-left: 42%; display: inline-flex;"> 
              <div>Select: &ensp;</div>
              <div><input type = "checkbox" name = "roomType" value = "king" id = "check3" class = "checkbox"></div>
              </div>
               
           </div>
       </div>
       
       <hr>
       
       <div class="room" id = "familyRoom">
           <div> <img src = "../images/family3.jpg" width="500px" height="250px"> </div>
           <div style=" text-align: center; display: flex; flex-direction:column;">
               <div class = "RoomTitle" id = "roomName4"> Family Room</div>
               <div class="pay"> <span style="font-weight: 900;" id = "price4"> 450</span><b> $</b> Per Night</div>
               
               
               <div class="button input2"> Number of Rooms: <input type = "number" value="0" min = "0" max = "5" id = "number4"> </div>
              
              <div class="button input2" style="margin-left: 42%; display: inline-flex;"> 
              <div>Select: &ensp;</div>
              <div><input type = "checkbox" name = "roomType" value = "king" id = "check4"  class = "checkbox"></div>
              </div>
               
           </div>
       </div> 
       
       <hr>
       
        <div class="confirmBtn"><button class = "View" id = "payBtn">Choose Rooms</button>
              </div>
        
    </div>
    
    
    <div id = "cart" class = "Cart"> 
    <center><h2 style="margin-bottom:1ex;"> My Booking </h2></center>
    <hr>
    <section style="display: inline-flex; width:100%; margin-bottom: 2ex;">
        <div class = "bookElements">
            <p style="margin-top: 3ex;"> Arrival Date</p>
            <p> Nights </p>
            <p> Guests </p>
            <p> Rooms </p>
        </div>
        <div class="bookData">
            <p id = "arrival" style="margin-top: 3ex;"></p>
            <p id = "nights"> </p>
            <p id = "guests"> </p>
            <p id = "rooms">  </p>
        </div>
        
    </section>
    <hr>
    
        <div id = "bookedRoom" style="display: inline-flex; width:100%; margin-bottom: 2ex;">
            <div class = "bookElements" id = "NAME"> </div>
            
            <div class="bookData" id = "roomPrice"> </div>
        </div>
        
        <hr>
        
        <div id = "bookedRoom" style="display: inline-flex; width:100%; margin-bottom: 2ex;">
           
            <div class = "bookElements"><p>Total</p></div>
            
            <div class="bookData" id = "hadi"> </div>
        </div>
        
        <hr>
        
        <div class="confirmBtn">
           
         <a href = "payment.php#pay"> <input type = "submit" class = "View" id = "confirmBtn" value="Confirm"> </a>  
           
              </div>
    
    </div>
    



    <?php include './footer.php'?>

