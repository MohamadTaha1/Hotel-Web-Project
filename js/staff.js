function Delete(count){

var total=document.getElementById("total"+count);

var username=document.getElementById("username"+count);

var room=document.getElementById("room"+count);

var order=document.getElementById("order"+count);

var orderTime=document.getElementById("orderTime"+count);

var status=document.getElementById("status"+count);

callback1(total.innerHTML, username.innerHTML, room.innerHTML, orderTime.innerHTML, order.innerHTML, status.innerHTML);

 document.getElementById("row"+count+"").outerHTML="";
 

 



 
}

function callback1(total, username, room, orderTime, order, status) {

    var jsonObject = {
         "type":"delete",
        "total": total,
        "username":username,
        "room":room,
        "order":order,
        "orderTime":orderTime,
        "status":status
    
    };

    var data = JSON.stringify(jsonObject);

    var requestUrl = "staffOrder.php";
   
    try
    {
       var asyncRequest = new XMLHttpRequest(); 
    
       
 
       asyncRequest.open( "POST", requestUrl, true ); 
       asyncRequest.setRequestHeader("Content-Type", "application/json" );  
       asyncRequest.send(data); 
       
    } 
    catch ( exception ) 
    {
       alert ( "Request Failed" );
    }


}


function callback2(total, username, room, orderTime, order, status) {

    var jsonObject = {
        "type":"update",
        "total": total,
        "username":username,
        "room":room,
        "order":order,
        "orderTime":orderTime,
        "status":status
    
    };

    var data = JSON.stringify(jsonObject);

    var requestUrl = "staffOrder.php";
   
    try
    {
       var asyncRequest = new XMLHttpRequest(); 
    
       
 
       asyncRequest.open( "POST", requestUrl, true ); 
       asyncRequest.setRequestHeader("Content-Type", "application/json" );  
       asyncRequest.send(data); 
       
    } 
    catch ( exception ) 
    {
       alert ( "Request Failed" );
    }


}

function Edit(count){
  var status=document.getElementById("status"+count);
  if(status.innerHTML=="Pending" || status.innerHTML=="pending"){
    status.innerHTML="done";

var total=document.getElementById("total"+count);

var username=document.getElementById("username"+count);

var room=document.getElementById("room"+count);

var order=document.getElementById("order"+count);

var orderTime=document.getElementById("orderTime"+count);

var status=document.getElementById("status"+count);

callback2(total.innerHTML, username.innerHTML, room.innerHTML, orderTime.innerHTML, order.innerHTML, status.innerHTML);
      
  }
    
   
   }


   function DeleteM(count){

    var location=document.getElementById("location"+count);
    
    var type=document.getElementById("type"+count);
 
    var status=document.getElementById("statusM"+count);

    callbackM1(location.innerHTML,type.innerHTML,status.innerHTML);

    document.getElementById("rowM"+count+"").outerHTML="";
   }

function callbackM1(location,type,status){

    var jsonObject = {
        "func":"delete",
        "location": location,
        "type":type,
        "status":status,
        
    
    };

    var data = JSON.stringify(jsonObject);

    var requestUrl = "staffMaintenance.php";
   
    try
    {
       var asyncRequest = new XMLHttpRequest(); 
    
       
 
       asyncRequest.open( "POST", requestUrl, true ); 
       asyncRequest.setRequestHeader("Content-Type", "application/json" );  
       asyncRequest.send(data); 
       
    } 
    catch ( exception ) 
    {
       alert ( "Request Failed" );
    }

}
   
   
   function EditM(count){
   
    var status=document.getElementById("statusM"+count);
   
     if(status.innerHTML=="Pending" || status.innerHTML=="pending"){
       status.innerHTML="done";

        var location=document.getElementById("location"+count);
        var type=document.getElementById("type"+count);
        var status=document.getElementById("statusM"+count);

    callbackM2(location.innerHTML,type.innerHTML,status.innerHTML);
      

     }
}

function callbackM2(location,type,status){
    
    var jsonObject = {
        "func":"update",
        "location": location,
        "type":type,
        "status":status,
        
    
    };

    var data = JSON.stringify(jsonObject);
   // alert(data);

    var requestUrl = "staffMaintenance.php";
   
    try
    {
       var asyncRequest = new XMLHttpRequest(); 
    
       
 
       asyncRequest.open( "POST", requestUrl, true ); 
       asyncRequest.setRequestHeader("Content-Type", "application/json" );  
       asyncRequest.send(data); 
       
    } 
    catch ( exception ) 
    {
       alert ( "Request Failed" );
    }

}




/* 
function Update(count){
    var current = new Date();
    
    var date = document.getElementById("date"+count);
    

    var dayNow = current.getDate();
    var monthNow = current.getMonth()+1;
    var yearNow = current.getFullYear();

    var dateArray = date.innerHTML.split("/");

    date.innerHTML = monthNow+"/"+dayNow+"/"+yearNow;

   if(monthNow==dateArray[0]){
        console.log(monthNow-dateArray[0]);
      
        if(dayNow-dateArray[1]<1){
            date.style.backgroundColor="red";

        }
    }
   
    }*/

    /*function addMaintenance(){
        addBtn = document.getElementById("addMaintenance");
        
        location = document.getElementById("location");
        type = document.getElementById("type");
        tabletask = document.getElementById("maintenancetable");
    
        taskBtn.addEventListener("click",tasks)
    
        function tasks(){
            var row1 = document.createElement("tr");
            
            var newempId = document.createElement("td");
            newempId.innerHTML = empId.value;
    
            
            var newshift = document.createElement("td");
            newshift.innerHTML = shift.value;
    
            var newday = document.createElement("td");
            newday.innerHTML = day.value;
    
           
            tabletask.appendChild(row1);
            row1.appendChild(location);
            row1.appendChild(type)
          
    
        }
    }*/

    function add_row()
   {
    var new_location=document.getElementById("new_location").value;
    var new_type=document.getElementById("new_type").value;
    var new_status=document.getElementById("new_status").value;
   
   
       
    var table=document.getElementById("maintenancetable");
    var table_len=(table.rows.length)-1;

    
    var row = table.insertRow(table_len).outerHTML=
        "<tr id='rowM"+table_len+
           "'><td id='roomId"+table_len+"'>"+new_location+
           "</td><td id='type"+table_len+"'>"+new_type+
           "</td><td id='statusM"+table_len+"'>"+new_status+
           "</td><td><input type='button' id='editMbutton"+table_len+
           "' value='Done' class='edit' onclick='EditM("+table_len+")'> <input type='button' value='Delete' class='delete' onclick='DeleteM("+table_len+
        ")'></td></tr>";


    callbackM3(new_location,new_type,new_status);  
  
   
   }


function callbackM3(location,type,status){
    
    var jsonObject = {
        "func":"add",
        "location": location,
        "type":type,
        "status":status
    
    };

    var data = JSON.stringify(jsonObject);
   

    var requestUrl = "staffMaintenance.php";
   
    try
    {
       var asyncRequest = new XMLHttpRequest(); 
    
       
 
       asyncRequest.open( "POST", requestUrl, true ); 
       asyncRequest.setRequestHeader("Content-Type", "application/json" );  
       asyncRequest.send(data); 
      
    } 
    catch ( exception ) 
    {
       alert ( "Request Failed" );
    }

    //window.location.href = "#";
}