
/* js for checkIn and checkOut Date */
var username;
var checkedIn;
var checkedOut;
var confirmBtn;


function start(){
username = document.getElementById("username");
var now = new Date();
var year = now.getFullYear();
var month = (now.getMonth() + 1);
var day = (now.getDate() + 1);

 if(day < 10) {
  day = '0' + day;
}
 if(month < 10) {
  month = '0' + month;
}

var dateTomorrow = year + "-" + month + "-" + day;
checkedIn = document.getElementById("checkIn");
checkedOut = document.getElementById("checkOut");

checkedIn.setAttribute("min", dateTomorrow);

checkedIn.addEventListener("change", CHANGE, false);
}

function CHANGE(){
    checkedOut.setAttribute("min", this.value);
}

/*********************************/

window.addEventListener("load", start, false);
window.addEventListener("load", start2, false);
window.addEventListener("load", start3, false);
/* view available rooms only when form submitted + show specific rooms according to nb of adults and children */

var form;
var block;
function start2(){
    form = document.getElementById("FORM");
    block = document.getElementById("show");
    
    block.style.display = "none";
    
    form.addEventListener("submit", show);
    confirmBtn = document.getElementById("confirmBtn");
    confirmBtn.addEventListener("click", saveForm);
}

var family;

function show(){
    family = document.getElementById("familyRoom");
    children = document.getElementById("children");

    //Starting json
    
    getRoomCount(checkedIn.value, checkedOut.value);


 //  callserver(checkedIn, checkedOut, username);

    if(parseInt(children.value) == 0){
        block.style.display = "flex";
        family.style.display = "none";
    }
    
    else{
    block.style.display = "flex";
  }
  
}

//Getting count of all room types
function getRoomCount(cIn, cOut){
    
 // const startDate = new Date(cIn);
 // const endDate = new Date(cOut);
 // const dates = [startDate, endDate];
  const dates = [cIn, cOut];

/*
  while (date <= endDate ) {
    dates.push(date.getDate()+ " "+ (date.getMonth()+1)); 
    date.setDate(date.getDate() + 1);
  }*/

  var jsonOBJ = {
    "DateList" : dates
  };


  var data = JSON.stringify(jsonOBJ);

try {
    var ajaxRequest = new XMLHttpRequest();

    ajaxRequest.addEventListener("readystatechange",
    function() { 
       if (ajaxRequest.readyState === 4 && ajaxRequest.status === 200)   getAvailableRooms(); 
       }, false);


    ajaxRequest.open( "POST", "bookJSON.php", true ); 
    ajaxRequest.setRequestHeader("Content-Type", "application/json" ); 
    ajaxRequest.send(data);       
    } 
    catch ( exception ) 
    {
    alert ( "Request Fail" );
    } 

  
}

function getAvailableRooms(){
    var requestUrl = "availableRooms.json";
   
   try
   {
      var asyncRequest = new XMLHttpRequest(); 
   
      
      asyncRequest.addEventListener("readystatechange",  function() { getAvailableRooms2( asyncRequest); },
      false);

      asyncRequest.open( "GET", requestUrl, true ); 
      asyncRequest.setRequestHeader("Accept", 
         "application/json; charset=utf-8" ); 
      asyncRequest.send(); 
      
   } 
   catch ( exception ) 
   {
      alert ( "Request Failed" );
   }
}

function getAvailableRooms2(asyncRequest){
    
    if ( asyncRequest.readyState == 4 && asyncRequest.status == 200 )
   {
      // convert the JSON string to an Object
      var data = JSON.parse(asyncRequest.responseText);
      $('#number1').attr({
        "max": data[0].King
      })
      $('#number2').attr({
        "max": data[0].Twin
      })
      $('#number3').attr({
        "max": data[0].Deluxe
      })
      $('#number4').attr({
        "max": data[0].Family
      })

      
   }
}

/*************** */
/*Getting user info and filling them in booking collections */


function saveForm() {

   /* alert(checkedIn.value);
    alert(checkedOut.value);
    alert(username.value);
    alert(adults.value);
    alert(children.value);
*/
    var King = document.getElementById("number1").value;
  
    var Twin = document.getElementById("number2").value;
    
    var Deluxe = document.getElementById("number3").value;
    
    var Family = document.getElementById("number4").value;
    

    

    callServer(username.value, checkedIn.value, checkedOut.value, adults.value, children.value,King,Twin,Deluxe,Family,TotalPrice);

}


function callServer(username, checkedIn, checkedOut,adults, children,King,Twin,Deluxe,Family,total) {
    
    var jsonObj = {
    
        "username": username,
        "checkedIn": checkedIn,
        "checkedOut": checkedOut,
        "adults": adults,
        "children": children,
        "King": King,
        "Twin": Twin,
        "Deluxe": Deluxe,
        "Family": Family,
        "TotalPrice": total,
    
    };
  
    var data = JSON.stringify(jsonObj); 
    try{
    var asyncRequest = new XMLHttpRequest(); // create request
    
    asyncRequest.open( "POST", "ConfirmBookingJSON.php", true ); 
    asyncRequest.setRequestHeader("Content-Type", "application/json" ); 
    asyncRequest.send(data); // send request  
       
    } 
    catch ( exception ) 
    {
        alert ( "Request Failed" );
    } 

}

/************************************/

/* View what was selected */

var payBtn;
var cart;

function start3(){
    payBtn = document.getElementById("payBtn");
    cart = document.getElementById("cart");
    payBtn.addEventListener("click", chooseRoom, false);
    cart.style.display = "none";
}

var check1;
var check2;
var check3;
var check4;

var arrival;
var guests;
var nights;

var checkIn;
var checkOut;
var adults;
var children;
var rooms;

function chooseRoom(){
    cart.style.display = "block";
    
    taha = document.getElementById("NAME");
    roomPrice = document.getElementById("roomPrice");
    hadi = document.getElementById("hadi");
    
    taha.innerHTML = "";
    roomPrice.innerHTML = "";
    total = 0;
    
    hadi.innerHTML = "";
    TotalPrice = 0;
    
    rooms = document.getElementById("rooms");
    rooms.innerHTML = "";
    
    
    
    arrival = document.getElementById("arrival");
    guests = document.getElementById("guests");
    nights = document.getElementById("nights"); 
    
    
    checkIn = document.getElementById("checkIn");
    checkOut = document.getElementById("checkOut");
    adults = document.getElementById("adults");
    children = document.getElementById("children");
    
    arrival.innerHTML = checkIn.value;
    guests.innerHTML = adults.value +" Adults, " + children.value +" Children";
    
    var chIn = checkIn.value.split("-");
    var chOut = checkOut.value.split("-");
    var Fnight = parseInt(chIn[2]);
    var Lnight = parseInt(chOut[2]);
    
    if (parseInt(chIn[1])== parseInt(chOut[1]))
        night = Lnight - Fnight;
    
    else{
        if(parseInt(chIn[1])==1 || parseInt(chIn[1])==3 || parseInt(chIn[1])==5 || parseInt(chIn[1])==7|| parseInt(chIn[1])==8 || parseInt(chIn[1])==10 || parseInt(chIn[1])==12){
            night = (31-Fnight)+Lnight;
        }
        
         else if(parseInt(chIn[1])==4 || parseInt(chIn[1])==6 || parseInt(chIn[1])==9 || parseInt(chIn[1])==11){
            night = (30-Fnight)+Lnight;
        }
        
        else
            night=(28-Fnight)+Lnight;
}
    
    nights.innerHTML = "" + night;
    
    check1 = document.getElementById("check1");
    check2 = document.getElementById("check2");
    check3 = document.getElementById("check3");
    check4 = document.getElementById("check4");

    if(check1.checked)
        choose('1');
    if(check2.checked)
        choose('2');
    if(check3.checked)
        choose('3');
    if(check4.checked)
        choose('4'); 
}

var night;
var price;
var roomName;
var number;

var taha;
var roomPrice;

var total = 0;

var hadi;
var TotalPrice = 0;

function choose(nb){
    hadi.innerHTML = "";
    price = document.getElementById("price"+nb);
    roomName = document.getElementById("roomName"+nb);
    number = document.getElementById("number"+nb);
    
  
    
    total = total + parseInt(number.value);
    rooms.innerHTML = total;
    if(parseInt(number.value)>0){
    var para1 = document.createElement("p");
    para1.innerHTML = roomName.innerHTML;
    taha.appendChild(para1); 
   }
    var allPrice = parseInt(price.innerHTML) * parseInt(night) * parseInt(number.value);
    
  
   if(parseInt(number.value)>0){
    var para2 = document.createElement("p");
    para2.innerHTML = price.innerHTML +"$";
    roomPrice.appendChild(para2);
    }
    
    
    TotalPrice = TotalPrice + allPrice;
    var para3 = document.createElement("p");
    para3.innerHTML = TotalPrice + "$";
    hadi.appendChild(para3);
    
    
}



















