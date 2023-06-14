<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../cs/staff.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <script src="../js/staff.js"></script>
</head>
<body>
    <div class="Container">
        <!--left navbar-->
        <div class="nav">
            <div class="title"> <h1>Admin Panel</h1></div>
            <ul>    
                <li>
                    <a href="#orders">Guest Orders</a>
                </li>
                <li>
                    <a href="#maintenance">Schedule of <br> maintenance</a>
                </li>
                <li>
                    <a href=""></a>
                </li>
            </ul>
        </div>
        <!--header menu-->
        <div class="main">
            <div class="menu">

                <div class="search" style="float: right;">
                    <input type="text" class="searchTerm" placeholder="Search">
                    <button type="submit" class="searchButton">
                    <i class="fa fa-search"></i>
                    </button>
                </div>            
                 <h1>Staff</h1>
            </div>
            <!--everything on the right of the navbar and under the header menu(whole page)-->
            <div class="information">
            
             <div class="orders" id="orders">
                <h1 class="h1-title">Guests Orders</h1>
                <div class=admin-tasks id="admin-tasks">
                <table class="table-tasks" border="1" id="tasktable">
                    <thead>
                    <tr class="table-titles" >
                      <td>Order Price</td>
                      <td>Room Id</td>
                      <td>Customer UserName</td>
                      <td>Order</td>
                      <td>Order Time</td>
                      <td>Status</td>
                      <td>Edit</td>

                    </tr>

                </thead>
            
                <?php 
                    require 'vendor/autoload.php';
                    use MongoDB\Client;
                    use MongoDB\Driver\Manager;
                    $client = new MongoDB\Client('mongodb://localhost:27017');

                    $collection = $client->Hotel->Order;

                    $result = $collection->find();

                    $i = 1;

                    foreach($result as $mongoid => $doc) {
                        echo "
                        <tr id=\"row".$i."\">
                        <td id=\"total".$i."\">".$doc['total']."</td>
                        <td id=\"room".$i."\">".$doc['room_id']."</td>
                        <td id=\"username".$i."\">".$doc['username']."</td>
                        <td id=\"order".$i."\">".$doc['order']."</td>
                        <td id=\"orderTime".$i."\">".$doc['orderTime']."</td>
                        <td id=\"status".$i."\">".$doc['status']."</td>
                        <td><input type=\"button\" id=\"edit_button1\" value=\"Done\" onclick=\"Edit('$i')\">
                          <input type=\"button\" value=\"Delete\" onclick=\"Delete('$i')\"></td>
                      </tr>";
                      $i++;
                    }
 
                 ?>  

              

            <!--    
                    <tr id="row1">
                      <td>878</td>
                      <td>12</td>
                      <td>mhmd</td>
                      <td>pizza large</td>
                      <td> 8:27pm</td>
                      <td id="status1">pending</td>
                      <td><input type="button" id="edit_button1" value="Done" onclick="Edit('1')">
                        <input type="button" value="Delete" onclick="Delete('1')"></td>
                    </tr>
                    <tr id="row2">
                        <td>879</td>
                        <td>18</td>
                        <td>jana</td>
                        <td>burger</td>
                        <td>9:12pm</td>
                        <td id="status2">pending</td>
                        <td ><input type="button" id="edit_button1" value="Done" onclick="Edit('2')">
                            <input type="button" value="Delete" onclick="Delete('2')"></td>
                      </tr>
                      <tr id="row3">
                        <td>920</td>
                        <td>12</td>
                        <td>hadi</td>
                        <td>salad</td>
                        <td>8:50pm</td>
                        <td id="status3">done</td>
                        <td ><input type="button" id="edit_button1" value="Done" onclick="Edit('3')">
                            <input type="button" value="Delete" onclick="Delete('3')"></td>
                      </tr>
                   
-->
                   
                  </table>
                </div>
             </div>
             <br>
             <br>
             <hr>
             <br>
             <br>
             <br>
             

             <div class="maintenance" id="maintenance">

                   
                
                <div class="orders" id="orders">
                    <h1 class="h1-title">Hotel Maintenance</h1>
                    <div class=admin-tasks id="admin-tasks">
                    <table class="table-tasks" border="1" id="maintenancetable">
                        <thead>
                        <tr class="table-titles" >
                          <td>Location</td>
                          <td>Maintenance Type</td>
                          <td>Status</td>
    
                        </tr>
                    </thead>

                    <?php 
                    require 'vendor/autoload.php';
                    
                    $client2 = new MongoDB\Client('mongodb://localhost:27017');

                    $collection2 = $client2->Hotel->Maintenance;

                    $result2 = $collection2->find();

                    $i = 1;

                    foreach($result2 as $mongoid => $doc) {
                        echo "
                        <tr id=\"rowM".$i."\">
                        <td id=\"location".$i."\">".$doc['location']."</td>
                        <td id=\"type".$i."\">".$doc['type']."</td>
                        <td id=\"statusM".$i."\">".$doc['status']."</td> 
                        <td><input type=\"button\" id=\"edit_button1\" value=\"Done\" onclick=\"EditM('$i')\">
                          <input type=\"button\" value=\"Delete\" onclick=\"DeleteM('$i')\"></td>
                      </tr>";
                      $i++;
                    }
 
                 ?>  


                    
                   <!--     <tr id="rowM1">
                          <td>Room 18</td>
                          <td>Air Conditioning</td>
                          <td id="statusM1">pending</td>
                          <td><input type="button" id="edit_button1" value="Done" onclick="EditM('1')">
                            <input type="button" value="Delete" onclick="DeleteM('1')"></td>
                        </tr>
                        <tr id="rowM2">
                            <td>Gym</td>
                            <td>Machines</td>
                            <td id="statusM2">pending</td>
                            <td ><input type="button" id="edit_button1" value="Done" onclick="EditM('2')">
                                <input type="button" value="Delete" onclick="DeleteM('2')"></td>
                          </tr>
                          <tr id="rowM3">
                            <td>Lobby</td>
                            <td>Air Conditioning</td>
                            <td id="statusM3">done</td>
                            <td ><input type="button" id="edit_button1" value="Done" onclick="EditM('3')">
                                <input type="button" value="Delete" onclick="DeleteM('3')"></td>
                          </tr>
                           </tr>  -->
                          <tr>
                            <td><input type="text" id="new_location"></td>
                            <td><input type="text" id="new_type"></td>
                            <td><input type="text" id="new_status"></td>
                            
                            <td><input type="button" class="add" onclick="add_row();" value="Add Row"></td>
                        
                       
                            
                       
                      </table>
                    </div>
                 </div>

                      

                    
                
             </div>
             <hr>
             </div>
             
            </div>
        </div>
    
</body>
</html>