<?php include '.\base.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Forms.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>FAQs</title>
    <script src="faq.js"> </script>
    <script src="jquery-3.6.0.js "></script>
</head>
<body>
   
    
<?php include './nav.php'?>
  
        <div id = "Faq" style="position: absolute; top:75%;"></div> 

  
<!--FAQ Section-->
    <div class="faq">
        <h1> FAQs</h1>
        <div class="faqInfo">
            <div class="faqtab">
                <div class="question">
                    What time is check in and check out?
                </div>
                <div class="answer">
                    Check-in is from 15:00 pm on the day of arrival. 
                    <br>
                    Check-out is any time before 12:00 pm on the day of departure.
                </div>
            </div>

            <hr>

            <div class="faqtab">
                <div class="question">
                    Can I check in late?
                </div>
                <div class="answer">
                    Yes. If you decide to extend your stay and enjoy an extra
                     few hours in The Grafton Hotel simply let the front desk 
                     team know in advance and they will be happy to assist you. 
                     There is an additional charge of €10  per hour after 12:00
                      pm and will depend on availability on the day.
                </div>

            </div>

            <hr>

            <div class="faqtab">
                <div class="question">
                    Is their wifi at the hotel?
                </div>
                <div class="answer">
                    Ultra fast wifi with no password required
                </div>

            </div>

            <hr>

            <div class="faqtab">
                <div class="question">
                   Who do I need to contact in case I lost something?
                </div>
                <div class="answer">
                    Please contact a member of our reception team and they
                    <br> will be happy to try to locate your lost items.
                </div>

            </div>

            <hr>

            <div class="faqtab">
                <div class="question">
                    Are the rooms air conditioned?
                </div>
                <div class="answer">
                    Yes, all bedrooms are fully air-conditioned which also controls the heat in the cold winter months.
                </div>

            </div>

            <hr>

            <div class="faqtab">
                <div class="question" id="question">
                    Is there parking at the hotel?
                </div>
                <div class="answer">
                    Yes, we offer free parking services form our hotel customers.
                </div>

            </div>
        </div>
    </div>





    <?php include './footer.php'?>