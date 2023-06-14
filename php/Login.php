<?php include '.\base.php';


$errors = "";

require 'vendor/autoload.php';

use MongoDB\Client;
use MongoDB\Driver\Manager;


$client = new MongoDB\Client('mongodb://localhost:27017');

$collection = $client->Hotel->User;

if(isset($_POST["submit"])){

  $username = $_POST["username"];
  $password = $_POST["password"];
 // $password = password_hash($password, PASSWORD_BCRYPT);

  $result = $collection->findOne(['username'=>$username]);

  if($result){
    $hashedpassword = $result['password'];
    $test = password_verify($password,$hashedpassword);
    if($test==true){

   // $result2 = $collection->findOne(['username'=>$username, 'password'=>$hashedpassword]);
   // if($result2){

    $_SESSION["username"] = $username;
    /* For Cookies */
    define('Five', 60*60*24*5);
    setcookie("username", $_POST["username"], time() + Five);
  //////////////////////
 
    header("Location: HomePage.php");
   
  }
  else{
    $errors = "Username and Password does not match";
  }
}

  else{
    $errors = "Username does not exist";
  }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/forms.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Log in</title>
</head> 
<body>
   
    
<?php include './nav.php'?>
    
   
       <div style="text-align: center; display: flex; justify-content: center; margin: 8%;">
        <div class = "login" id = "loginForm">
           

        <div class="backlogin">
        <?php echo "<div class = 'errors'> $errors </div>"; ?>
        <form method="post" action="" class = "form">
        <h2 style="font-family: serif; font-weight: normal; margin-bottom: 5%; color: darkgoldenrod;"> Login To Your Account</h2>
        
        <p><input type = "text" name = "username" placeholder = "Username" autocomplete="on" required size = "25"></p>
        <br>
         <p><input type="password" name = "password" size = "25" placeholder = "Password"></p>
       <br>
         <p><input type = "submit" name = "submit" value = "Log in" size = "25" class = "submit"></p>
       </form>
       
       <p class="aLogin" style="text-decoration: none;">Need an Account? <a href = "Register.php#registerForm" class="aLogin"> Register Now</a></p>
       
      
    </div>
    </div>
           
     </div>
       
     <?php include './footer.php'?>
   
    
</body>


</html>