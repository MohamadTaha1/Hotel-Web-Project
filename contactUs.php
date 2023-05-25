<?php include '.\base.php';
include '.\SessionSecurity.php';

require 'vendor/autoload.php';

use MongoDB\Client;
use MongoDB\Driver\Manager;


$client = new MongoDB\Client('mongodb://localhost:27017');

$collection = $client->Hotel->Contact;

if(isset($_POST['contactSubmit'])){

$name = $_POST['name'];
$message = $_POST['message'];
$email = $_POST['email'];

$mailTo = "6mppa2002@gmail.com";
$headers = "From: " . $email;
$txt = "You have received an e-mail from " . $name . ".\n\n" . $message;

mail($mailTo, $subject, $txt, $headers);

$query = 
['name' => $name ,'email' => $email , 'message'=>$message];
$results = $collection->insertOne($query);

header('location:HomePage.php?contactSubmit');



}

?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Forms.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Contact Us</title>
</head>
<body>
   
    
<?php include 'nav.php'?>

       
    <div style="text-align: center; display: flex; justify-content: center; margin: 10% 0 ;" id = "this">
        <div class = "contactBackground">
       
           

        <div class="contact">
        
        <form method="post" action="" class = "contactForm">
        <h2 style="font-family: serif; font-weight: normal; margin-bottom: 5%; color: darkgoldenrod;">Contact Us</h2>
        
        <p><input type = "text" name = "name" placeholder = "Enter Your Name" autocomplete="on" required size = "25"></p>
        
         <p><input type="email" name = "email" size = "25" placeholder = "Enter Your Email"></p>
       
       <textarea type="text" name = "message"  placeholder = "Enter Your Message" class="contactMessage"></textarea>
       
         <p><input type = "submit" name = "contactSubmit" value = "Submit" size = "25" class = "submit"></p>
       </form>
       
      
       
      
    </div>
    </div>
           
     </div>
       
       
     <?php include './footer.php'?>
   