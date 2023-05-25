



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="manager.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Manager</title>
    <script src="manager.js"></script>
</head>
<body>
    <div class="Container">
        <!--left navbar-->
        <div class="nav">
            <div class="title"> <h1>Admin Panel</h1></div>
            <ul>
                <li>
                    <a href="#stats">Rooms Status</a>
                </li>
                <li>
                    <a href="#h1-tasks">Tasks Assigning</a>
                </li>
                <li>
                    <a href="#staff-br">Rewards and <br> Promotion</a>
                </li>
            </ul>
        </div>
        <!--header menu-->
        <div class="main" >
            <div class="menu">

                <div class="search" style="float: right;">
                    <input type="text" class="searchTerm" placeholder="Search">
                    <button type="submit" class="searchButton">
                    <i class="fa fa-search"></i>
                    </button>
                </div>            
                 <h1>Manager</h1>
            </div>
            <!--everything on the right of the navbar and under the header menu(whole page)-->
            <div class="information">

             <!--was supposed to be Statistics not anymore-->

            <div class="stats" id="stats" >
                <br>
            <h1 class="h1-title">Rooms Status</h1>  
                <div class=admin-rooms id="rooms-status">
                    
                    <table class="table-rooms" border="2px solid black" id="roomtable">

                        <tr>
                            <th>Room Id</th>
                            <th>Type</th>
                            <th>Price</th>
                            <th>Booked Dates</th>
                            <th>actions</th>

                        </tr>

                        <?php 
                    require 'vendor/autoload.php';
                    
                    $client2 = new MongoDB\Client('mongodb://localhost:27017');

                    $collection2 = $client2->Hotel->Room;

                    $result2 = $collection2->find();

                    $i = 1;

                    foreach($result2 as $mongoid => $doc) {
                        $dates = json_encode($doc['dates']);
                        echo "
                        <tr id=\"row".$i."\">
                        <td id=\"roomId".$i."\">".$doc['room_id']."</td>
                        <td id=\"type".$i."\">".$doc['type']."</td>
                        <td id=\"price".$i."\">".$doc['price']."</td> 
                        <td id=\"status".$i."\">".$dates."</td> 
                        <td>
                        <input type=\"button\" id=\"edit_button".$i."\" value=\"Edit\" onclick=\"Edit('$i')\">
                        <input type=\"button\" id=\"save_button".$i."\" value=\"Save\" onclick=\"Save('$i')\">
                        
                        
                        </td>
                      </tr>";
                      $i++;
                    }
 
                 ?>  

                       
                        
                        <!--
                        <tr id="row1">
                            <td id="roomId1">1</td>
                            <td id="type1">Classic King Room</td>
                            <td id="status1">available</td>
                            <td id = "price1">350$ </td>
                            <td>
                            <input type="button" id="edit_button1" value="Edit" onclick="Edit('1')">
                            <input type="button" id="save_button1" value="Save" onclick="Save('1')">
                            <input type="button" value="Delete" onclick="Delete('1')">
                            </td>
                         </tr>
                         <tr id="row2">
                            <td id="roomId2">2</td>
                            <td id="type2">Classic Twin Room</td>
                            <td id="status2">reserved</td>
                            <td id = "price2">250$</td>
                            <td>
                                <input type="button" id="edit_button2" value="Edit" onclick="
                                Edit('2')">
                                <input type="button" id="save_button2" value="Save" onclick="
                                Save('2')">
                                <input type="button" value="Delete" onclick="Delete('2')">
                         </tr>
                         <tr id="row3">
                            <td id="roomId3">3</td>
                            <td id="type3">Deluxe Suite</td>
                            <td id="status3">available</td>
                            <td id = "price3">400$</td>
                            <td>
                                <input type="button" id="edit_button3" value="Edit" onclick="
                                Edit('3')">
                                <input type="button" id="save_button3" value="Save" onclick="
                                Save('3')">
                                <input type="button" value="Delete" onclick="Delete('3')">
                            </td>
                         </tr>
                         <tr id="row4">
                            <td id="roomId4">4</td>
                            <td id="type4">Family Room</td>
                            <td id="status4">available</td>
                            <td id = "price4">450$</td>
                            <td>
                                <input type="button" id="edit_button4" value="Edit" onclick="
                                Edit('4')">
                                <input type="button" id="save_button4" value="Save" onclick="
                                Save('4')">
                                <input type="button" value="Delete" onclick="Delete('4')">
                         </tr>
                           
                           <tr>
                              <td><input type="text" id="new_roomId"></td>
                              <td><input type="text" id="new_type"></td>
                              <td><input type="text" id="new_status"></td>
                              <td><input type="text" id="new_price"></td>
                              <td><input type="button" class="add" onclick="add_row();" value="Add Row"></td>
                           </tr>

                    -->
                            

                        
                       
                      </table>
                </div>
                <br>
                <br>

                <hr>


                
              
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>

            <!--Tasks-->
            <h1 class="h1-title" id="h1-tasks">Weekly Tasks Assigning</h1>
            <div class=admin-tasks id="admin-tasks">
                
                <table class="table-tasks" border="1" id="tasktable">
                    <tr class="table-titles">
                      <td>Employee Id</td>
                      <td>Employee Name</td>
                      <td>Task</td>
                      <td>Shift</td>
                      <td>Working Days</td>
                    </tr>

            <?php       
                    $collection3 = $client2->Hotel->Task;

                    $result3 = $collection3->find();

                    $i = 1;

                    foreach($result3 as $mongoid => $doc) {
                       
                        echo "
                        <tr id=\"row".$i."\">
                        <td id=\"employee_id".$i."\">".$doc['employee_id']."</td>
                        <td id=\"name".$i."\">".$doc['name']."</td>
                        <td id=\"task".$i."\">".$doc['task']."</td> 
                        <td id=\"shift".$i."\">".$doc['shift']."</td> 
                        <td id=\"days".$i."\">".$doc['days']."</td> 
                      </tr>";
                      $i++;
                    }
            ?>
                    <!--
                    <tr>
                      <td>202001926</td>
                      <td>Mohamad Taha</td>
                      <td>cooking</td>
                      <td>night shift</td>
                      <td>MWF</td>
                    </tr>
                    <tr>
                        <td>202001926</td>
                        <td>Hadi Bazzi</td>
                        <td>cleaning</td>
                        <td>morning shift</td>
                        <td>TR</td>
                      </tr>
                      <tr>
                        <td>202001926</td>
                        <td>Jana Jaber</td>
                        <td>reception</td>
                        <td>morning shift</td>
                        <td>MWF</td>
                      </tr>
                -->
                  </table>
            </div>
            <br>
            <br>
            <hr>
            <div class="add-tasks" >
                <input type="text" placeholder="Employee Id" class="task-input" id="empId">
                <input type="text" placeholder="Employee Name" class="task-input" id="empName">
                <input type="text" placeholder="Task" class="task-input" id="task">
                <input type="text" placeholder="Shift" class="task-input" id="shift">
                <input type="text" placeholder="Days" class="task-input" id="day">

                
                
                
            </div>
            <center>   <button id="addtask">Add Task</button>
            <br>
            <br>
            <form action="managerT.php" method="post">
                   <input type="submit" name="delete" value="Reset Weekly Tasks" >
            </form></center>


             <!--Rewards-->
             <br>
             <hr>
             <br>
             <br>
             <br id="staff-br">
             <h1 class="h1-title" style="text-align: center;">Staff rewards and Promotion</h1>
            <div class="rewards" id="rewards" >
            <div class="search" style="margin:20px auto ;">
                <input type="text" class="searchTerm" placeholder="Employee Id" id="searchinput">
                <button type="submit" class="searchButton" id="searchbutton">
                <i class="fa fa-search"></i>
                </button>
            </div> 

            <div id="write-in-here">

            </div>
         </div>
        </div>

           
            

            </div>
    </div>
    
</body>
</html>