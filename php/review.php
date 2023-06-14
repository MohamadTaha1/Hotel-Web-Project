<?php include '.\base.php';

require 'vendor/autoload.php';

use MongoDB\Client;
use MongoDB\Driver\Manager;



$client = new MongoDB\Client('mongodb://localhost:27017');

$collection = $client->Hotel->Review;

$result = $collection->find();



    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="review.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Review Page</title>
    <script src="..//js/jquery-3.6.0.js "></script>
    <script src="../js/review.js"></script>
    
</head>
<body>
   
<?php include './nav.php'?>

<div style="position: absolute; top:76%;" id = "r"> </div>

<section class="body-review">
            <h1 class="customer">Customer Reviews</h1>  
            <div class="reviews-box-container" id="review">  

            <?php

                foreach($result as $mongoid => $doc) {
                    echo "
                    <div class='reviews-box'>                  
                    <div class='box-top'>                                                                          
                            <div class='user'> " .
                               $doc['name'] . 
                               "
                            </div>
                        <div class='reviews'> " .
                            $doc['star'] . "Stars
                        </div>
                    </div>
                    
                    <div class='review-comment'>".
                        $doc['reviewMessage']."
                    </div>
                </div>
                    
                    
                    
                    
                    
                    ";
                    
                }

            ?>
                         
          <!--      <div class="reviews-box">                  
                    <div class="box-top">                                                                          
                            <div class="user">
                                Mohamad Taha
                            </div>
                        <div class="reviews">
                           5 Stars
                        </div>
                    </div>
                    
                    <div class="review-comment">
                        We spent 2 nights at Crown Palace in Beirut downtown, we had wedding event. Got in around 3:30 on Friday $ had to dress for rehearsal at five. Room not ready & wouldn’t be for few hours. My son stays at Crown Palace & is diamond customer. He was able to get room by signing in online. So we four got ready in his room. Saturday we showered & ask desk for clean towels. Went back to room mid afternoon & no towels, called & ask again. Dressed for wedding, came back around the 11:00 pm. Still no towels, called desk & they said they had no clean towels at all & wouldn’t till next day in afternoon. I told them we needed to shower & leave before 11. He again said no towels & could have cared less that we couldn’t shower. Got dressed next morning & went to breakfast, went back to room for belongings & therewas lady cleaning rooms & on her cart were clean towels. Hmmm, think we could have had clean towels for shower. Just not impressed with this situation.
                    </div>
                </div>
                
                <div class="reviews-box">                 
                    <div class="box-top">
                       
                            <div class="user">
                                Hadi Bazzi
                            </div>
                        
                        
                        <div class="reviews">
                           4 Stars

                        </div>
                    </div>
                    
                    <div class="review-comment">
                        Hello, I was there for the reunion 7-15/17-2022. My room was under Breathy Jones, my room was 320. WOW!!! When I entered it was wonderful. Bed perfectly made, bathroom spotless, temp.of room great & smelled nice. So from the beginning of the stay til the end was great. Now the room attendant "NyKimbria Allen", was super. Her beautiful smile😁, outgoing personality🤗, & caring spirit every time was great😉. This young lady is surely a great quarterback for your hksp. staff. Will you please Reward her in some way??? Her appearance was so on point❤❤❤. Thank you so much for a great stay. ( front desk NEVER picked up the phone my whole weekend stay 😣 every time I got a busy signal )...I only wanted a wake-up call. NyKimbria Allen, thank you for ALL you do room attendants matter 👍🙏.
                    </div>
                </div>
             
                <div class="reviews-box">                   
                    <div class="box-top">                      
                                                
                           
                            <div class="user">
                                Jana Jaber   
                            </div>                       
                        <div class="reviews">
                            5 Stars
                        </div>
                    </div>
                    <div class="review-comment">
                        This is my favorite hotel in the world. If you have a problem make sure you contact the manager. The breakfast buffets have always been the BEST in the world! There is always coffee ready at the main lobby, and if there are any problems the staff can help you. Thank you Crown Palace for making your name so great!
                    </div>
                </div>   
                
                <div class="reviews-box">                   
                    <div class="box-top">                      
                                                
                           
                            <div class="user">
                                Loulou   
                            </div>                       
                        <div class="reviews">
                            5 Stars
                        </div>
                    </div>
                    <div class="review-comment">
                        Very friendly & attentive staff at the Crown Palace in Beirut, made our stay thoroughly enjoyable. Just a 10 minute drive away to Warner Bros Studio Tour. When checking in, not only did we get complimentary drinks while we waited for our room but after mentioning that we were going to the studios, unbeknown to us he arranged some free Harry Potter merchandise for our girls too. A lovely gesture & surprise.
                    </div>
                </div> 

                <div class="reviews-box">
                    <div class="box-top">
                        <div class="profile">
                            <div class="user">
                                Jawad
                            </div>
                        </div>
                        <div class="reviews">
                         4 Stars
    
                        </div>
                    </div>
                    <div class="review-comment">
                        I wanted to take the time to write about this amazing chain of hotels after seeing average reviews. I am a diamond Crown Palace member and the quality of service is impeccable. They always go beyond the call of duty to help and have some of the best hotels around with a real good value for money. I have stayed at many different Crown Palace’s and have rarely had any issues. Even when issues arose they were dealt with the highest degree of professionalism. Keep up the good work!
                    </div>
                </div>
            -->

            </div>

            <?php if(isset($_SESSION['username'])){

            ?>

            <form onsubmit="return false;" id = "form">
                <div class="review-input">
                    <h2 style="font-family: serif; font-weight: normal; margin-bottom: 5%; color: darkgoldenrod;" >Add Review</h2>
                    <input id="name"  type = "text" name = "name" placeholder = "Enter Your Name" autocomplete="on" required size = "25" class="Tinput">
                    <input id="rating" type="number" name = "rating" size = "25" placeholder = "Rating from 1 to 5" class="Tinput" max="5" min="0">
    
                    <textarea id="message" type="text" name = "message"  placeholder = "Enter Your Message" class="reviewMessage"></textarea>
                    <input type="submit" value="Add Review" class="add-review">
                </div>
            </form>

            <?php }  ?>
        </section>






        <?php include './footer.php'?>
   
    
    </body>
</html>