<?php include '.\base.php';

if(isset($_GET['contactSubmit'])){
    echo "<script type='text/javascript'>alert('Message Successfully recieved') </script>";
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css//style.css">
    <title>Home Page</title>
</head>
<body>
   

   <?php  include './nav.php ' ?>
    
    
    <h1 style = "text-align: center; font-family: serif; color: darkgoldenrod; padding-top: 2ex;" 
    id = "aboutUs"> Welcome <?php echo $name; ?>
    to The Crown Palace Hotel <br> In The Heart of Beirut </h1>
    
    
    <div class="divider">
    <p class = "paragStyle"> <span class="titles"> About Us</span><br><br> &ensp; &ensp;A modern, art deco stylish hotel located off Hamra Street in Beirut, one of the coolest places to stay in Beirut due to its proximity to all the major attractions in Beirut city. At The Crown Palace Hotel, with its 50 spacious, fresh, contemporary bedrooms. You are in for a treat staying with us.<br><br>
    
     &ensp; &ensp;Our Hotel is perfectly suited for your family or business requirements with a pool, fitness center, private dining and equipped meeting rooms.<br><br>
    
     &ensp; &ensp;All of us are very proud that we are a friendly, family owned and run hotel with a long-standing team and when guests return they know we will make them feel welcome and at home.
   </p>
    
    <img class="AboutUsimage" src = "../images/back21.jpg">
      
    
    </div>
    
     
      
      
      <div style = "background-color: #f2f2f2;" class = "divider">
       
        <img src = "../images/back7.jpg"  class="homeRooms">
       
        <p class = "paragStyle"> <span class="titles"> Rooms </span> <br><br> &ensp; &ensp; With 50 luxurious guest rooms with all the amenities expected in a 5-star hotel, fitted in a modern, 1920'2 art-deco inspired style.

        Our Guests can choose from a range of rooms with different room configurations such as our Classic King Rooms, up to the larger Deluxe Rooms, and with options for families and adults to stay in our Family Rooms, we can facilitate up to a capacity of six people.
           <br>
           <span style="display: flex; justify-content: flex-end;">
           <span> <a href = "Sleep.php"><input class = "viewButtons" name = "rooms" value = "View Room" type="submit" > </a> </span> 
          </span>    
   </p>
          
      </div>
      
      
      
      
      <div class = "RestaurantHome">
      <div class="eatP"> <span class="titles"> Restaurant </span> <br><br> &ensp; &ensp; The Crown Palace offers the perfect setting for those looking to enjoy a bite to eat and drink in an atmospheric and sophisticated setting, that oozes old school glamour.
      <br><br> &ensp; &ensp;
       Our hotel is the ideal excuse for a spot of lunch, an after-hours aperitif with the boss, casual cocktails over a weekend catch-up or maybe a quiet glass of vino to unwind.
       <br><br>
        
        <div style="display: flex; justify-content: flex-end;">
        <span style="margin-right: 2ex;"> <a href = "Dinner-Menu.pdf"><input class = "viewButtons" name = "menu" value = "Restaurant Menu" type="submit" > </a> </span> 
       
       <a href = "Restaurant.php"><input class = "viewButtons" name = "booking" value = "Crown's Restaurant" type="submit" > </a>
          </div>
    </div>
    </div>
    
    <div class = "RestaurantHomeMobile">
        
         <img src = "..//images/back23.jpg" width="100%" >
        
        <div class = eatPmobile>
           <span class="titles"> Restaurant </span> <br><br> &ensp; &ensp; The Crown Palace offers the perfect setting for those looking to enjoy a bite to eat and drink in an atmospheric and sophisticated setting, that oozes old school glamour.
      <br><br> &ensp; &ensp;
       Our hotel is the ideal excuse for a spot of lunch, an after-hours aperitif with the boss, casual cocktails over a weekend catch-up or maybe a quiet glass of vino to unwind.
       <br><br>
          
                  <div style="display: flex; justify-content: flex-end;">
        <span style="margin-right: 2ex;"> <a href = "Dinner-Menu.pdf"><input class = "viewButtons" name = "menu" value = "Restaurant Menu" type="submit" > </a> </span> 
       
          <a href = "Restaurant.php"><input class = "viewButtons" name = "booking" value = "Crown's Restaurant" type="submit" > </a>
            </div>
    </div> 
        </div>
        
        
       
      <div style="background-color: palegoldenrod; margin-top: 7ex; margin-bottom:7ex; padding-top: 2ex; padding-bottom: 6ex; ">
        
      <div class="titles" style= "text-align: center; font-size: xxx-large; margin: 1ex;"> Services</div>  
    
     <!-- Start Grid -->
     
     <div class="grid">
        <div class="container">
             <img src="../images/pool3.jpg" class="image">
             <div class="over">
                 <div class="text">Pool</div>
             </div>
        </div>
        
        <div class="container">
             <img src="../images/gym2.jpg" class="image">
             <div class="over">
              <div class="text">Gym</div>
             </div>
        </div>
       
       
            <div class="container">
                 <img src="../images/spa3.jpg" class="image">
                 <div class="over">
                     <div class="text">Spa</div>
                 </div>
            </div>
        
            <div class="container">
                <img src="../images/restaurant2.jpg" class="image">
                 <div class="over">
                     <div class="text">Restaurant</div>
                 </div>
            </div>
        </div>
        
    <!--END GRID-->
    
    </div>  
       
       <?php include './footer.php'; ?>
   
    
</body>



</html>