$(function(){
    $('#form').submit(Add);
});
 


function Add(){
   
   
        var div1 = $("<div>", {class: "reviews-box"});
        var div2 = $("<div>", {class: "box-top"});
        var div3 = $("<div>", {class: "user"});
        var div4 = $("<div>", {class: "reviews"});
        var div5 = $("<div>", {class: "review-comment"});
        var stars = $("<i>", {class: "fa fa-star"});
    
        div3.append($('#name').val());
        div5.append($('#message').val());
    
        
        $('#review').append(div1);
        div1.append(div2);
        div2.append(div3);
        div2.append(div4);
        div1.append(div5); 
        
        div4.append($('#rating').val() + " Stars");
              
    

    callback($('#name').val(),$('#rating').val(),$('#message').val());
}

function callback(name, rating, message) {
 
    jsonObj = {
        'name':name,
        'star':rating,
        'reviewMessage':message

    };

    var data = JSON.stringify(jsonObj);
     
    try{
    var asyncRequest = new XMLHttpRequest(); // create request
    
    asyncRequest.open( "POST", "reviewJSON.php", true ); 
    asyncRequest.setRequestHeader("Content-Type", "application/json" ); 
    asyncRequest.send(data); // send request  
       
    } 
    catch ( exception ) 
    {
        alert ( "Request Failed" );
    } 


    }
