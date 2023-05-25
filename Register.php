<?php include '.\base.php' ?>

<?php

$errors = array();

require 'vendor/autoload.php';

use MongoDB\Client;
use MongoDB\Driver\Manager;


$client = new MongoDB\Client('mongodb://localhost:27017');

$collection = $client->Hotel->User;

if (isset($_POST['Register'])) {
       $username = $_POST['username'];
       $fname = $_POST['fname'];
       $lname = $_POST['lname'];
       $number = $_POST['telNb'];
       $city = $_POST['city'];
       $address = $_POST['address'];
       $email = $_POST['email'];
       $password = $_POST['password'];
       

       if(!preg_match("/^\d{2}[- ]?\d{6}$/",$number)){
             array_push($errors, 'Invalid Phone Number'); 
       }

       if(!preg_match("/^[A-Za-z]{1}[^@]*@[^.]+\..+$/", $email)){
              array_push($errors, 'Invalid Email Address'); 
       }

       if(!preg_match( "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/",$password)){
               array_push($errors, 'Password should be atleast 8 characters, contain at least one uppercase letter, one number, and one special character'); 
       }
       $password = password_hash($password, PASSWORD_BCRYPT);
       $result = $collection->findOne(['email' => $email]);
       if ($result){
              array_push($errors, "Email already exists");
       }


       $result2 = $collection->findOne(['username' => $username]);
       if ($result2){
              array_push($errors, "username already exists");
             
       }

       if(count($errors)==0){
              $user = 
              [ 'user_id' => 1, 'name' => $fname ,'family_name' => $lname , 'city'=>$city , 'address'=>$address, 'phone' => $number , 'email' => $email ,'username'=>$username , 'password'=>$password ];
              $results = $collection->insertOne($user);
              $_SESSION['username'] = $username;
              header('location:Homepage.php');

       }

}



?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="forms.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Register</title>
</head>
<body>
   
    
<?php include './nav.php'?>
    
   
       <div style="text-align: center; display: flex; justify-content: center; margin: 10%;">
        <div class = "login" id = "registerForm">
           

        <div class="backlogin">

    <?php foreach($errors as $error) { ?>

    <div class = "errors"><?php echo "$error";?></div>

    <?php } ?>          
        
     <form method="post" action = "" class = "form">
            <h2 style="font-family: serif; font-weight: normal; margin-bottom: 5%; color: darkgoldenrod;"> Create An Account</h2>
       <p>   <input type="text" name= "fname" size = "25" placeholder="Name"></p>
       <p>   <input type="text" name= "lname" size = "25" placeholder="Family Name"></p>
       
       <p>  <input type="tel" name = "telNb"  placeholder="Phone Number" required size = "25"></p>
       
       <p>  <input type="text" name = "city" size = "25" placeholder="City"></p>
       <p>  <input type="text" name = "address" size = "25"placeholder="Address"></p>
       <p>  <input type="text" name = "username" size = "25"placeholder="Username"></p>
       <p> <input type = "text" name = "email"  autocomplete="on" required size = "25" placeholder="Email"></p>
       <p> <input type="password" name = "password" size = "25" required placeholder="Password"></p>
      <p><a href = "#"><input type = "submit" value = "Register" name = 'Register' size = "25" class="submit"></a></p>
      <p class="aLogin" style="text-decoration: none;">Already have an account? <a href = "Login.php#loginForm" class="aLogin"> Login Now</a></p>
    </form>
      
       
     </div>
    </div>
           
           </div>
       
       
       
           <?php include './footer.php'?>
   
    
</body>


</html>