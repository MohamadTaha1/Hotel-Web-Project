
<style>

.li-icon{
    display: inline-flex; 
    list-style-type: none;
    margin: 2%;
    padding-top: 2%;
    color : white;
}

.icon{
    color: white;
    display: none;
}


@media screen and (max-width: 700px) and (min-width: 0px){

  .navul{
    position:absolute;
  }

.navul.responsive {
    position: absolute;
    padding: 0%;
    
    }
    .navul.responsive a.icon {
    padding: 5% 5% 0% 0%;
    position: absolute;
     right: 0;
     top: 0;
     }
     .navul.responsive .navbar-list {
        margin-top: 50%;
        float: none;
        display: block;
        margin: auto;
        padding: 2.5%;
    }

    .fa-fa-sort-desc{
        display: none;
    }

    .none:hover ul{
        display: none;
    }
    .back-gold{
        opacity: 1;
    }

      

    .navbar-list {display: none}
    .li-icon{
        float: right;
        margin-right: 5%;
        font-size: x-large;
    }
    .icon{
        display: block;
        
        
    }

  .navbar {
    height: auto;
  }



}

@media screen and (max-width: 850px) and (min-width: 700px){

.navbar {
    height: 450px;
}



}




@media screen and  (max-width: 1000px) and (min-width: 850px){

.navbar {
    height: 500px;
}

}

@media screen and  (max-width: 1200px) and (min-width: 1000px){
.navbar {
    height: 600px;
}


}


@media screen and (max-width: 800px) and (min-width: 0px){

.nav-items{

padding-bottom: 10%;

}
.crownH1{
    font-size:xx-large;
}
}

</style>

<?php
if ($loggedIn){

?>



<script>

function myFunction() {
  var x = document.getElementById("myTopnav");
  var fafa = document.getElementById("fa");
  if(fafa.className == "fa fa-sort-desc"){
    fafa.className = "";
  }

  else{
    fafa.className = "fa fa-sort-desc";
  }

  var fafa2 = document.getElementById("fa2");
  if(fafa2.className == "fa fa-sort-desc"){
    fafa2.className = "";
  }

  else{
    fafa2.className = "fa fa-sort-desc";
  }

  if (x.className === "navul back-gold") {
    x.className += " responsive";
  } else {
    x.className = "navul back-gold";
  }
}

</script>
<nav class="navbar">
       
       <ul class = "navul back-gold" id = "myTopnav">
           <li class="navbar-list"style="flex-direction: column;">
               
           <div class="none">
              
              <a href="Sleep.php"> Rooms <i class="fa fa-sort-desc" id="fa2"></i></a>
              
              <ul class="navbar-list-dropDown">
                   
                    <li><a href = "Sleep.php#suite"> Deluxe Suite </a></li>
                    <li><a href = "Sleep.php#Twin"> Classic Twin Room</a></li>
                    <li><a href = "Sleep.php#King"> Classic King Room </a></li>
                    <li><a href = "Sleep.php#family"> Family and Sharing Rooms</a></li>
               </ul> 
             </div>  
               
           </li>
           
           <li class="navbar-list">
               
               <div class="none">
              
              <a href="Services.php"> Services <i class="fa fa-sort-desc" id = "fa"></i></a>
              
              <ul class="navbar-list-dropDown">
                   
                    <li><a href = "Services.php#pool"> Pool </a></li>
                    <li><a href = "Services.php#spa"> Spa </a></li>
                    <li><a href = "Services.phpl#gym"> Fitness Center </a></li>
                    
               </ul> 
               </div>
           </li>
           
        
        
           <li class="navbar-list">
               <a href="Restaurant.php">Restaurant</a>
           </li>
           <li class="navbar-list">
               <a href="contactUs.php#this">Contact Us</a>
           </li>
           <li class="navbar-list logborder" >
               <a href="HomePage.php?logout">Log out</a>
           </li>
           <li class="li-icon">
           <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                 <i class="fa fa-bars"></i>
            </a>
           </li>
       </ul>
       

    <div class="nav-items">
    <div style = "text-align: center">
        <a href = "HomePage.php"><img src="../images/logo3-removebg-preview.png" class="logoImg" width="50px" height = "50px"></a>
    </div>
   
        <a href = "HomePage.php"><h1 class = "crownH1">  Crown   Palace </h1></a>
   
   
   <div class="content"> 
     <a href = "Menu.php#MENU"> Order Now </a>
   </div>
       </div>
   
</nav>

<?php }else{ ?>

  <script>

function myFunction() {
  var x = document.getElementById("myTopnav");
  var fafa = document.getElementById("fa");
  if(fafa.className == "fa fa-sort-desc"){
    fafa.className = "";
  }

  else{
    fafa.className = "fa fa-sort-desc";
  }

  var fafa2 = document.getElementById("fa2");
  if(fafa2.className == "fa fa-sort-desc"){
    fafa2.className = "";
  }

  else{
    fafa2.className = "fa fa-sort-desc";
  }

  if (x.className === "navul back-gold") {
    x.className += " responsive";
  } else {
    x.className = "navul back-gold";
  }
}

</script>

    <nav class="navbar">
       
       <ul class = "navul back-gold" id = "myTopnav">
           <li class="navbar-list"style="flex-direction: column;">
               
           <div class="none">
              
              <a href="Sleep.php"> Rooms <i id="fa" class="fa fa-sort-desc"></i></a>
              
              <ul class="navbar-list-dropDown">
                   
                    <li><a href = "Sleep.php#suite"> Deluxe Suite </a></li>
                    <li><a href = "Sleep.php#Twin"> Classic Twin Room</a></li>
                    <li><a href = "Sleep.php#King"> Classic King Room </a></li>
                    <li><a href = "Sleep.php#family"> Family and Sharing Rooms</a></li>
               </ul> 
             </div>  
               
           </li>
           
           <li class="navbar-list">
               
               <div class="none">
              
              <a href="Services.php"> Services <i id="fa2" class="fa fa-sort-desc"></i></a>
              
              <ul class="navbar-list-dropDown">
                   
                    <li><a href = "Services.php#pool"> Pool </a></li>
                    <li><a href = "Services.php#spa"> Spa </a></li>
                    <li><a href = "Services.phpl#gym"> Fitness Center </a></li>
                    
               </ul> 
               </div>
           </li>
           
           
           <li class="navbar-list">
               <a href="Restaurant.php">Restaurant</a>
           </li>
           <li class="navbar-list">
               <a href="contactUs.php#this">Contact Us</a>
           </li>
           <li class="navbar-list logborder" >
               <a href="login.php#loginForm">Log In</a>
           </li>
           <li class="li-icon">
           <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                 <i class="fa fa-bars"></i>
            </a>
           </li>
       </ul>
       
       <div class="nav-items">
    <div style = "text-align: center">
        <a href = "HomePage.php"><img src="../images/logo3-removebg-preview.png" class="logoImg" width="50px" height = "50px"></a>
    </div>
   
        <a href = "HomePage.php"><h1 class = "crownH1">  Crown   Palace </h1></a>
   
   
   <div class="content"> 
     <a href = "Menu.php#MENU"> Order Now </a>
   </div>
       </div>
   
</nav>
    

<?php } ?>