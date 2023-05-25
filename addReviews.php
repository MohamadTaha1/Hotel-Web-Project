<?php


require 'vendor/autoload.php';

use MongoDB\Client;
use MongoDB\Driver\Manager;


$client = new MongoDB\Client(
    'mongodb://localhost:27017');
$db = $client->test;
var_dump($db);

$collection = $client->Hotel->Review;
	
    
$Review = [["name"=>"Mohamad Taha", "star"=> "5", "reviewMessage"=>"We spent 2 nights at Crown Palace in Beirut downtown, we had wedding event. Got in around 3:30 on Friday $ had to dress for rehearsal at five. Room not ready & wouldn’t be for few hours. My son stays at Crown Palace & is diamond customer. He was able to get room by signing in online. So we four got ready in his room. Saturday we showered & ask desk for clean towels. Went back to room mid afternoon & no towels, called & ask again. Dressed for wedding, came back around the 11:00 pm. Still no towels, called desk & they said they had no clean towels at all & wouldn’t till next day in afternoon. I told them we needed to shower & leave before 11. He again said no towels & could have cared less that we couldn’t shower. Got dressed next morning & went to breakfast, went back to room for belongings & therewas lady cleaning rooms & on her cart were clean towels. Hmmm, think we could have had clean towels for shower. Just not impressed with this situation."],
["name"=>"Hadi Bazzi", "star"=> "4" , "reviewMessage"=>"Hello, I was there for the reunion 7-15/17-2022. My room was under Breathy Jones, my room was 320. WOW!!! When I entered it was wonderful. Bed perfectly made, bathroom spotless, temp.of room great & smelled nice. So from the beginning of the stay til the end was great. Now the room attendant 'NyKimbria Allen', was super. Her beautiful smile😁, outgoing personality🤗, & caring spirit every time was great😉. This young lady is surely a great quarterback for your hksp. staff. Will you please Reward her in some way??? Her appearance was so on point❤❤❤. Thank you so much for a great stay. ( front desk NEVER picked up the phone my whole weekend stay 😣 every time I got a busy signal )...I only wanted a wake-up call. NyKimbria Allen, thank you for ALL you do room attendants matter 👍🙏."],
["name"=>"Jana Jaber", "star"=> "5", "reviewMessage"=>"This is my favorite hotel in the world. If you have a problem make sure you contact the manager. The breakfast buffets have always been the BEST in the world! There is always coffee ready at the main lobby, and if there are any problems the staff can help you. Thank you Crown Palace for making your name so great!"],
["name"=>"Loulou", "star"=> "4", "reviewMessage"=>"Very friendly & attentive staff at the Crown Palace in Beirut, made our stay thoroughly enjoyable. Just a 10 minute drive away to Warner Bros Studio Tour. When checking in, not only did we get complimentary drinks while we waited for our room but after mentioning that we were going to the studios, unbeknown to us he arranged some free Harry Potter merchandise for our girls too. A lovely gesture & surprise."],
["name"=>"Jawad", "star"=> "5","reviewMessage"=>"I wanted to take the time to write about this amazing chain of hotels after seeing average reviews. I am a diamond Crown Palace member and the quality of service is impeccable. They always go beyond the call of duty to help and have some of the best hotels around with a real good value for money. I have stayed at many different Crown Palace’s and have rarely had any issues. Even when issues arose they were dealt with the highest degree of professionalism. Keep up the good work!"]


];

$result = $collection->insertMany($Review);








?>