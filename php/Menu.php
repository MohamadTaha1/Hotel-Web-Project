<?php 

include 'base.php';
include 'SessionSecurity.php';

if(!isset($_SESSION['hasRoom'])){
    header("Location: book.php#form");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..//css/Menu.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Menu Page</title>
    <script src="..//js/Menu.js"></script>
    <script src="jquery-3.6.0.js "></script>
</head>
<body>
   
    
    <?php include 'nav.php'?>

<div style="position: absolute; top:76%" id = "MENU"></div>

<center><h1> Crowns Restaurant Online Order</h1></center>
  <form method="post" action="ConfirmOrder.php" > 
    <div class="menu">
    <div class="bordered">
     <h2>Snacks</h2>
      <div class = "section">
           
           <div class="names">
                <p>Harissa spiced olives</p>
                <p> Smoked almonds</p>
           </div>
       
           <div class="prices">
               <strong><p>$<span id= "price1">5</span></p></strong>
               <strong><p>$<span id= "price2">5</span></p></strong>
           
           </div>
           <div class="checkBox">
               <p><input type = "number" name = "1" value = "0" id = "check1" class = "checkbox" min = "0" ></p>
               <p><input type = "number" name = "2" value = "0" id = "check2" class = "checkbox" min = "0"></p>
           </div>
           
       </div>

    </div>
    
    
    <div class="bordered">
     <h2>Starters and Light bites</h2>
      <div class = "section">
           
           <div class="names">
                <p>Crispy BBQ chicken wings</p>
                <p> Falafels, red pepper and walnut paste</p>
           </div>
       
           <div class="prices">
               <strong><p>$<span id= "price3">12</span></p></strong>
               <strong><p>$<span id= "price4">9</span></p></strong>
           
           </div>
           <div class="checkBox">
               <p><input type = "number" name = "3" value = "0" id = "check3" class = "checkbox" min = "0" ></p>
               <p><input type = "number" name = "4" value = "0" id = "check4" class = "checkbox" min = "0" ></p>
           </div>
           
       </div>

    </div>
    
    
    <div class="bordered">
     <h2>Salads</h2>
      <div class = "section">
           
           <div class="names">
                <p><b>Sweet Beets-</b> Beetroot, Carrot, Orange, Fennel, and Feta </p>
                <p><b> Classic Caesar- </b>Crisp Baby Gem, Bacon, Croutons and Parmesan 
Cheese </p>
           </div>
       
           <div class="prices">
              <strong><p>$<span id= "price5">14</span></p></strong>
               <strong><p>$<span id= "price6">13</span></p></strong>
           
           </div>
           <div class="checkBox">
               <p><input type = "number" name = "5" value = "0" id = "check5" class = "checkbox" min = "0" ></p>
               <p><input type = "number" name = "6" value = "0" id = "check6" class = "checkbox" min = "0" ></p>
           </div>
           
       </div>

    </div>

    <div class="bordered">
        <h2>Mains</h2>
         <div class = "section">
              
              <div class="names">
                   <p>Beef burger with bacon, cheese, house relish and fries</p>
                   <p> Crispy chicken burger, slaw, BBQ sauce and fries  </p>
              </div>
          
              <div class="prices">
                  <strong><p>$<span id= "price7">18</span></p></strong>
                  <strong><p>$<span id= "price8">18</span></p></strong>
              
              </div>
              <div class="checkBox">
                  <p><input type = "number" name = "7" value = "0" id = "check7" class = "checkbox" min = "0" ></p>
                  <p><input type = "number" name = "8" value = "0" id = "check8" class = "checkbox" min = "0" ></p>
              </div>
              
          </div>
   
       </div>


       <div class="bordered">
        <h2>Sides</h2>
         <div class = "section">
              
              <div class="names">
               <p> Fries </p>
               <p> Onion rings </p>
              
              </div>
          
              <div class="prices">
                  <strong><p>$<span id= "price9">5</span></p></strong>
                  <strong><p>$<span id= "price10">5</span></p></strong>
              
              </div>
              <div class="checkBox">
                  <p><input type = "number" name = "9" value = "0" id = "check9" class = "checkbox" min = "0" ></p>
                  <p><input type = "number" name = "10" value = "0" id = "check10" class = "checkbox" min = "0" ></p>
              </div>
              
          </div>
   
       </div>


       <div class="bordered">
        <h2>Sweet Things</h2>
         <div class = "section">
              
              <div class="names">
                 <p>Chocolate bread and butter pudding, vanilla ice cream</p>
                 <p>Lemon meringue posset, raspberry gel </p>
   
              </div>
          
              <div class="prices">
                  <strong><p>$<span id= "price11">9</span></p></strong>
                  <strong><p>$<span id= "price12">9</span></p></strong>
              
              </div>
              <div class="checkBox">
                  <p><input type = "number" name = "11" value = "0" id = "check11" class = "checkbox" min = "0" ></p>
                  <p><input type = "number" name = "12" value = "0" id = "check12" class = "checkbox" min = "0" ></p>
              </div>
              
          </div>
   
       </div>
       <div class="total">
       
       <div>
        <input type="button" class="viewButtons" id="menuButton" value="View Total Price">
         </div>
         
         <div>
         <span class="TOTAL">Total: </span><span class="TotalPrice" id ="totals" >0</span>
         </div>
         
         <div>
         <button type = "submit" name = "submitOrder" class="viewButtons">Submit Order</button>
         </div>
         
       </div>

    </div>
    </form>
</body>

<?php include 'footer.php'?>
    



</html>