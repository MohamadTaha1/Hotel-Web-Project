var mybutton;
var myinput;
var mylist;

/*Rooms variables*/ 
var btn;
var price;
var rid;
var roomstatus;
var type;
var table;

/* Tasks variables*/
var empId;
var empName;
var task;
var day;
var shift;
var taskBtn;
var tabletask





/**On Page Load */
window.addEventListener("load" ,start);
window.addEventListener("load" ,addtask);
window.addEventListener("load",search)



/**Add Rooms */

function Edit(count){

    document.getElementById("edit_button"+count).style.display="none";
    document.getElementById("save_button"+count).style.display="block";
       
    var roomId=document.getElementById("roomId"+count);
    var type=document.getElementById("type"+count);
    var status=document.getElementById("status"+count);
    var price=document.getElementById("price"+count);
   
   // var roomId_data=roomId.innerHTML;
    var type_data=type.innerHTML;
    var status_data=status.innerHTML;
   var price_data=price.innerHTML;
   
       
   // roomId.innerHTML="<input type='text' id='roomId_text"+count+"' value='"+roomId_data+"'>";
    type.innerHTML="<input type='text' id='type_text"+count+"' value='"+type_data+"'>";
    status.innerHTML="<input type='text' id='status_text"+count+"' value='"+status_data+"'>";
    price.innerHTML="<input type='text' id='price_text"+count+"' value='"+price_data+"'>";
   
   }
   
   function Save(count){

    var roomId_val=document.getElementById("roomId"+count).innerHTML;
    var type_val=document.getElementById("type_text"+count).value;
    var status_val=document.getElementById("status_text"+count).value;
    var price_val=document.getElementById("price_text"+count).value;
   
   
   // document.getElementById("roomId"+count).innerHTML=roomId_val;
    document.getElementById("type"+count).innerHTML=type_val;
    document.getElementById("status"+count).innerHTML=status_val;
    document.getElementById("price"+count).innerHTML=price_val;
   
   
    document.getElementById("edit_button"+count).style.display="block";
    document.getElementById("save_button"+count).style.display="none";

    callback1 (roomId_val, type_val, price_val, status_val);
   }

   function callback1 (roomId_val, type_val, price_val, status_val){
    
     var jsonObject = {
        "roomId": roomId_val,
        "type": type_val,
        "price": price_val,
        "dates":status_val
    };

    var data = JSON.stringify(jsonObject);

   // alert(data);

    var requestUrl = "ManagerRoom.php";
   
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
   function Delete(count)
   {
    document.getElementById("row"+count+"").outerHTML="";
   }
   
   function add_row()
   {
    var new_roomId=document.getElementById("new_roomId").value;
    var new_type=document.getElementById("new_type").value;
    var new_status=document.getElementById("new_status").value;
    var new_price=document.getElementById("new_price").value;
   
       
    var table=document.getElementById("roomtable");
    var table_len=(table.rows.length)-1;
    var row = table.insertRow(table_len).outerHTML=
        "<tr id='row"+table_len+
           "'><td id='roomId"+table_len+"'>"+new_roomId+
           "</td><td id='type"+table_len+"'>"+new_type+
           "</td><td id='status"+table_len+"'>"+new_status+
           "</td><td id='price"+table_len+"'>"+new_price+
           "</td><td><input type='button' id='edit_button"+table_len+
           "' value='Edit' class='edit' onclick='Edit("+table_len+")'> <input type='button' id='save_button"+table_len+"' value='Save' class='save' onclick='Save("+table_len+")'> <input type='button' value='Delete' class='delete' onclick='Delete("+table_len+
        ")'></td></tr>";
   
    document.getElementById("new_roomId").value="";
    document.getElementById("new_type").value="";
    document.getElementById("new_status").value="";
    document.getElementById("new_price").value="";
   
   }

*/



/*Add Task*/




function addtask(){
    taskBtn = document.getElementById("addtask");
    empId = document.getElementById("empId");
    emp = document.getElementById("empName");
    task = document.getElementById("task");
    day = document.getElementById("day");
    shift = document.getElementById("shift");
    tabletask = document.getElementById("tasktable");

    taskBtn.addEventListener("click",tasks)

    function tasks(){
        var row1 = document.createElement("tr");
        
        var newempId = document.createElement("td");
        newempId.innerHTML = empId.value;

        var NewName = document.createElement("td");
        NewName.innerHTML = emp.value;

        var newtasks = document.createElement("td");
        newtasks.innerHTML = task.value;

        
        var newshift = document.createElement("td");
        newshift.innerHTML = shift.value;

        var newday = document.createElement("td");
        newday.innerHTML = day.value;

       
        tabletask.appendChild(row1);
        row1.appendChild(newempId);
        row1.appendChild(NewName)
        row1.appendChild(newtasks);
        row1.appendChild(newshift);
        row1.appendChild(newday);

        callbackT1(empId.value, emp.value, task.value, day.value, shift.value);


    }
}


function callbackT1(empId, emp, task, day, shift) {

    var jsonObject = {
        "employee_id": empId,
        "name": emp,
        "task": task,
        "shift":shift,
        "days": day
    };

    var data = JSON.stringify(jsonObject);

   // alert(data);

    var requestUrl = "managerTask.php";
   
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



var searched;
var searchBtn;
var output;
var write;
var addReward;

function search(){
   searched = document.getElementById("searchinput");
    
    var searchBtn = document.getElementById("searchbutton");

    var write = document.getElementById("write-in-here");
    write.style.margin=" 20px 0px 0px 300px";
    
    searchBtn.addEventListener("click", assignReward)

    function assignReward(){
        write.innerHTML=" ";
        var countReward = 0;
        var output = document.createElement("div");
        output.setAttribute("class", "rewards-div")
        output.innerHTML= " Id Number: "+searched.value+"&ensp;";

        var addReward = document.createElement("button");
        addReward.innerHTML = "Grant Reward";

        var addPromotion = document.createElement("button");
        addPromotion.innerHTML = "Promote";

        write.appendChild(output);
        output.appendChild(addPromotion);
        output.appendChild(addReward);

        addPromotion.addEventListener("click", Promote);

        // Not Working //
        if (countReward==0){
        addReward.addEventListener("click",changeReward);
        countReward++;
        }
        else{
            alert("You already started changing reward");
            addReward.removeEventListener("click",changeReward);
        }
        
    }

    var insertReward;

    function changeReward(){
        
        insertReward = document.createElement("input");
        insertReward.setAttribute("type", "text");
        insertReward.setAttribute("placeholder", "insert amount");
        insertReward.style.margin="20px 0px 0px 20px";

        var acceptReward = document.createElement("button");
        acceptReward.innerHTML = "Reward";
        acceptReward.style.margin= '3px';

        write.appendChild(insertReward);
        write.appendChild(acceptReward);

        acceptReward.addEventListener("click", ConfirmReward);
           
        
        
    }

    function ConfirmReward(){
        var amount = insertReward.value;
        callback5(amount, searched.value);
    }

    function callback5(amount, id){
        var json = {
            "amount":amount,
            "id":id
        };
        var data = JSON.stringify(json);
    

        var requestUrl = "ManagerReward.php";
       
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
         alert("Employee with ID: "+id+" was rewarded "+insertReward.value+" $");
    }


var insertPromotion;
    function Promote(){
        
         insertPromotion = document.createElement("input");
        insertPromotion.setAttribute("type", "text");
        insertPromotion.setAttribute("placeholder", "Choose new Position");
        insertPromotion.style.margin="20px 0px 0px 20px";

        var acceptPromotion = document.createElement("button");
        acceptPromotion.innerHTML = "Promote";
        acceptPromotion.style.margin= '3px';
        
        write.appendChild(insertPromotion);
        write.appendChild(acceptPromotion);

        
        
        acceptPromotion.addEventListener("click", ConfirmPromote);
           
    
}



function ConfirmPromote(){
    var position = insertPromotion.value;
    callbak4(position, searched.value);


}

function callbak4(position,searched){

    var json= 
    {
        "position": position,
        "EID":searched

    };
    var data = JSON.stringify(json);
    

    var requestUrl = "ManagerPromote.php";
   
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
    alert("Employee with ID: "+searched+" was promoted to "+insertPromotion.value);

}
}


function start(){
    mybutton = document.getElementById("addnew");
    myinput = document.getElementById("task");
    mylist = document.getElementById("todoList");

    mybutton.addEventListener("click" ,addItem);
    
    mylist.addEventListener("click", processEvent);


    function addItem(){
        var newItem = document.createElement("li");
        newItem.innerHTML = myinput.value;

        var remBtn = document.createElement("button");
        remBtn.innerHTML = "X";

       
        mylist.appendChild(newItem);
        newItem.appendChild(remBtn);
    }

    function processEvent(e){

        if(e.target.tagName.toLowerCase() == "button")
            e.target.parentNode.remove();
        else if(e.target.tagName.toLowerCase() == "li")
        e.target.style.textDecoration = "line-through";

    }

}