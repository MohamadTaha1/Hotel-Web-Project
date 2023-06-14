<?php include './base.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/restaurant.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Restaurant</title>
</head>
<body>

<?php include './nav2.php' ?>
    
 <div class="divider">
       
        <img src = "../images/restaurant2.jpg"  style ="  width: 55%; margin-top: 7ex;">
       
        <p class = "paragStyle"> <span class="titles"> Eat & Drink </span> <br><br> &ensp; &ensp; Crown Palace offers the perfect setting for those looking to enjoy a bite to eat and drink in an atmospheric and sophisticated setting. Our hotel is the ideal excuse for breakfast, a spot of lunch, an after-hours aperitif with colleagues, casual cocktails over a weekend catch-up or maybe a quiet glass of vino to unwind.
           <br><br>
            
       &ensp; &ensp; Carefully crafted cocktails with an innovative menu offering everything from lite bites to all the main course classics topped off with attentive and friendly service. This is how we dazzle our guests!
           <br>
           
            
   </p>
        <br><br>
         </div>
         
         <div class="section2">
         <div class= "food-menu">
         
       <p><img src="../images/food.jpg" style="width:90%;"></p>
             <p style="font-size: 5ex; color: goldenrod">Crown's Menu</p>
        <a href = "Menu.php#MENU"><input class = "viewButtons" name = "booking" value = "View Menu" type="submit" > </a>
         
         </div>
         
         
         
    
        
    <div style=" margin-top: 7ex; margin-bottom:7ex; padding-top: 2ex; padding-bottom: 6ex; ">
            
    
<div class="slideshow">

<div class="slide fade">
  
  <img src="../images/food3.jpg" style="width:100%">

</div>

<div class="slide fade">
  
  <img src="../images/food2.jpg" style="width:100%">
</div>

<div class="slide fade">
 
  <img src="../images/food4.jpg" style="width:100%">
</div>

  <a class="before" onclick="addSlides(-1)">&#10094;</a>
  <a class="after" onclick="addSlides(1)"> &#10095;</a>

</div>

<script>
var slideIndex = 1;
show(slideIndex);

function addSlides(a) {
  show (slideIndex += a);
}
function show (a) {
  
  var slides = document.getElementsByClassName("slide");

  if (a > slides.length){
      slideIndex = 1}    
    
  if (a < 1) {
      slideIndex = slides.length
  }
    
  for (var i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
 
  slides[slideIndex-1].style.display = "block";  
}
</script>

    </div>
         
          
    
      </div>
      
      
      <div class ="opening-hours">
         <p style="  text-align: center; font-size: 30pt; color: goldenrod;margin-bottom: 4ex; font-weight: bold">Crown's opening hours</p>
         <div class="hours">
           <p>
               Monday<br>
               Tuesday<br>
               Wednesday<br>
               Thursday<br>
               Friday<br>
               Saturday<br>
               Sunday<br>
           </p>
            <p>
              12:00 PM - 10:30 PM<br>
              12:00 PM - 10:30 PM <br>
              12:00 PM - 10:30 PM<br>
             12:00 PM - 11:30 PM<br>
             12:00 PM - 12:30AM<br>
             12:00 PM - 12:30AM <br>
            12:00 PM - 10:30PM<br>
             </p>
         </div>
          
          
          
      </div>
    
    
    
      <?php include './footer.php'?>
   
   
</body>
</html>