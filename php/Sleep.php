<?php include '.\base.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
     <link rel="stylesheet" href="../css/Sleep.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Rooms</title>
</head>
<body>
   
    
<?php include './nav.php'?>
  
  <div id = "King" style = "position: absolute; bottom: 18%;"> </div>
  
  <div class = "section" >
    
         
     <div>
     <div class="RoomTitle"> Classic King Room</div>
     <div class="slideshow">

     <div class="slide fade">
  <img src="../images/king4.jpg" style="width:100%">
</div>

  <div class="slide fade">
  
      <img src="../images/bathroom3.jpg" style="width:100%">
  </div>

<div class="slide fade">
 
  <img src="../images/saboon1.jpg" style="width:100%">
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
     
    
      
      <div class="RoomParag">
          <span class = "FeatureTitle">Key Features & Facilites:</span><br><i class="fa fa-arrows-alt icon">&nbsp;</i>Room Size from 20 sqm | 215 sqft <br><i class="fa fa-bed icon">&nbsp;</i> King Bed <br> <i class="fa fa-television icon">&nbsp;</i>43" Smart TV with Chromecast<br> <i class="fa fa-wifi icon">&nbsp;</i>Complimentary Ultra-Fast Wi-Fi<br> <i class="fa fa-snowflake-o icon">&nbsp;</i>Individually controlled Air conditioning <br> <i class="fa fa-shower icon">&nbsp;</i>Walk-In Shower <br><i class="fa fa-coffee icon">&nbsp;</i> Tea and coffee making facilities <br> <i class="fa fa-bath icon">&nbsp;</i>Ritual Toiletries <br><i class="fa fa-laptop icon">&nbsp;</i> In-Room Laptop Safe 
          
          <div id = "Twin" style = "position: absolute;"> </div>
          
          <div style="display: flex; justify-content: flex-end;">
          <a href = "Book.php#form"><input class = "viewButtons" name = "booking" value = "Book room" type="submit" > </a>
          </div>
          
      </div>
      
      
       
  </div>
  
  
  
  
  
  
 
  
  <div class="section">
    
         
     <div>
     <div class="RoomTitle"> Classic Twin Room</div>
     <div class="slideshow">

     <div class="slide1 fade">
  <img src="../images/twin4.jpg" style="width:100%">
</div>

  <div class="slide1 fade">
  
      <img src="../images/bathTwin.jpg" style="width:100%">
  </div>

<div class="slide1 fade">
 
  <img src="../images/tea4.jpg" style="width:100%">
</div>

  <a class="before" onclick="addSlides1(-1)">&#10094;</a>
  <a class="after" onclick="addSlides1(1)"> &#10095;</a>

</div>

<script>
var slideIndex1 = 1;
show1(slideIndex1);

function addSlides1(a) {
  show1 (slideIndex1 += a);
}
function show1 (a) {
  
  var slides1 = document.getElementsByClassName("slide1");

  if (a > slides1.length){
      slideIndex1 = 1}    
    
  if (a < 1) {
      slideIndex1 = slides1.length
  }
    
  for (var i = 0; i < slides1.length; i++) {
    slides1[i].style.display = "none";  
  }
 
  slides1[slideIndex1-1].style.display = "block";  
}
</script>
     
      </div>
     
     
      
      <div class="RoomParag">
          <span class = "FeatureTitle">Key Features & Facilites:</span><br><i class="fa fa-arrows-alt icon">&nbsp;</i>Room Size from 21 sqm | 226 sqft <br><i class="fa fa-bed icon">&nbsp;</i>Two Single Beds <br><i class="fa fa-television icon">&nbsp;</i>43” flat screen TV with Chromecast<br><i class="fa fa-wifi icon">&nbsp;</i>Complimentary Ultra-Fast Wi-Fi<br><i class="fa fa-snowflake-o icon">&nbsp;</i>Individually controlled Air conditioning<br><i class="fa fa-shower icon">&nbsp;</i>Walk-In Shower<br><i class="fa fa-coffee icon">&nbsp;</i>Tea and Coffee making facilities <br><i class="fa fa-bath icon">&nbsp;</i>Ritual Toiletries<br><i class="fa fa-laptop icon">&nbsp;</i>In-Room Laptop Safe 
          
          <div id = "family" style = "position: absolute;"> </div>
          
          <div style="display: flex; justify-content: flex-end;">
          <a href = "Book.php#form"><input class = "viewButtons" name = "booking" value = "Book room" type="submit" > </a>
          </div>
      </div>
  </div>
  
  
  
    
  
  <div class="section">
         
     <div>
     <div class="RoomTitle"> Family and Sharing Rooms</div>
     <div class="slideshow">

     <div class="slide2 fade">
  <img src="../images/family3.jpg" style="width:100%">
</div>

  <div class="slide2 fade">
  
      <img src="../images/bunk.jpg" style="width:100%">
  </div>

<div class="slide2 fade">
 
  <img src="../images/salon1.jpg" style="width:100%">
</div>

  <a class="before" onclick="addSlides2(-1)">&#10094;</a>
  <a class="after" onclick="addSlides2(1)"> &#10095;</a>
  
</div>

  


<script>
var slideIndex2 = 1;
show2(slideIndex2);

function addSlides2(a) {
  show2 (slideIndex2 += a);
}
function show2 (a) {
  
  var slides2 = document.getElementsByClassName("slide2");

  if (a > slides2.length){
      slideIndex2 = 1}    
    
  if (a < 1) {
      slideIndex2 = slides2.length
  }
    
  for (var i = 0; i < slides2.length; i++) {
    slides2[i].style.display = "none";  
  }
 
  slides2[slideIndex2-1].style.display = "block";  
}
</script>
     
      </div>
     
      
     <div class="RoomParag">
          <span class = "FeatureTitle">Key Features & Facilites:</span><br><i class="fa fa-arrows-alt icon">&nbsp;</i>Room Size up to 34 sqm | 366 sqft <br> <i class="fa fa-bed icon">&nbsp;</i>Super King<br><i class="fa fa-bed icon">&nbsp;</i>Bunk Beds <br><i class="fa fa-television icon">&nbsp;</i>43" flat-screen TV with Chromecast<br><i class="fa fa-wifi icon">&nbsp;</i>Complimentary Ultra-Fast Wi-Fi<br><i class="fa fa-snowflake-o icon">&nbsp;</i>AirConditioning<br><i class="fa fa-coffee icon">&nbsp;</i>Tea and coffee making facilities<br><i class="fa fa-shower icon">&nbsp;</i>Walk-In Shower<br><i class="fa fa-bath icon">&nbsp;</i>Ritual Toiletries<br><i class="fa fa-laptop icon">&nbsp;</i>In-Room Safe
          
         <div id = "suite" style = "position: absolute;"> </div>
          
          <div style="display: flex; justify-content: flex-end;">
          <a href = "Book.php#form"><input class = "viewButtons" name = "booking" value = "Book room" type="submit" > </a>
          </div>
      </div>
  </div>
  
  
  
  
  
    
  
  <div class="section">
    
         
     <div>
     <div class="RoomTitle"> Deluxe Suite</div>
     <div class="slideshow">

     <div class="slide3 fade">
  <img src="../images/deluxe5.jpg" style="width:100%">
</div>

  <div class="slide3 fade">
  
      <img src="../images/deluxe7.jpg" style="width:100%">
  </div>

<div class="slide3 fade">
 
  <img src="../images/deluxeBath.jpg" style="width:100%">
</div>

  <a class="before" onclick="addSlides3(-1)">&#10094;</a>
  <a class="after" onclick="addSlides3(1)"> &#10095;</a>

</div>

<script>
var slideIndex3 = 1;
show3(slideIndex3);

function addSlides3(a) {
  show3 (slideIndex3 += a);
}
function show3 (a) {
  
  var slides3 = document.getElementsByClassName("slide3");

  if (a > slides3.length){
      slideIndex3 = 1}    
    
  if (a < 1) {
      slideIndex3 = slides3.length
  }
    
  for (var i = 0; i < slides3.length; i++) {
    slides3[i].style.display = "none";  
  }
 
  slides3[slideIndex3-1].style.display = "block";  
}
</script>
     
      </div>
     
     
      
      <div class="RoomParag">
          <span class = "FeatureTitle">Key Features & Facilites:</span><br> <i class="fa fa-arrows-alt icon">&nbsp;</i>Room Size 50 sqm | 538 sqft<br> <i class="fa fa-bed icon">&nbsp;</i>Super King <br> <i class="fa fa-television icon">&nbsp;</i>43” flat screen TV with Chromecast<br><i class="fa fa-glass icon">&nbsp;</i>Selection of Irish Gins and Whiskeys<br><i class="fa fa-wifi icon">&nbsp;</i>Complimentary Ultra-Fast Wi-Fi<br><i class="fa fa-snowflake-o icon">&nbsp;</i>Individually controlled Air Conditioning<br><i class="fa fa-shower icon">&nbsp;</i>Walk-In Shower<br><i class="fa fa-bath icon">&nbsp;</i>Bathrobe & Rituals Toiletries<br><i class="fa fa-coffee icon">&nbsp;</i>Tea and coffee making facilities <br><i class="fa fa-laptop icon">&nbsp;</i>In-Room Laptop friendly Safe<br><i class="fa fa-female icon">&nbsp;</i>Dyson Super-Fast Hair Dryer
          
          <div style="display: flex; justify-content: flex-end;">
          <a href = "Book.php#form"><input class = "viewButtons" name = "booking" value = "Book room" type="submit" > </a>
          </div>
      </div>
  </div>
  
   
  <?php include './footer.php'?>
    
    
</body>


</html>
    