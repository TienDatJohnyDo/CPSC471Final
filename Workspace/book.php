<?php
include('connection.php');
if(isset($_GET['date'])){

    $date=$_GET['date'];
}
if(isset($_POST['submit'])){
    $room = $_POST['room'];
    $timeS = $_POST['timeslot'];
    $email = $_POST['email'];
    $ID = $_POST['id'];
    //$comment =$_POST['comment'];  
    
    
    // $mysqli = new mysqli('localhost','root','AppServ1!','workspace_booking_db');
    
    // $stmt = $mysqli->prepare("INSERT INTO booking(email,id,date) VALUES(?,?,?)");
    // $stmt->bind_param('sss',$email,$id,$date);
    // $stmt->execute(); 
    // $msg ="<div class='alert alert-sucess'>Booking Successfull !</div>";
    // $stmt->close();
    // $mysqli->close();

        $mysqli = new mysqli('localhost','root','AppServ1!','workspace_booking_db');
        
        // $stmt = $mysqli->prepare("INSERT INTO booked(Booked_Room,Email,ID,date) VALUES(?,?,?,?)");
        // $stmt->bind_param('ssss',$room,$email,$id,$date);
        // $stmt->execute(); 

        $stmt = $mysqli->prepare("INSERT INTO book (Booked_Room,timeslot,Email,ID,date) VALUES(?,?,?,?,?)");
        $stmt->bind_param('sssss',$room,$timeS,$email,$ID,$date);
        
        

        $room = stripcslashes($room);  
        $email = stripcslashes($email);  
        $ID = stripcslashes($ID);
        $room = mysqli_real_escape_string($con, $room);  
        $email = mysqli_real_escape_string($con, $email);
        $ID = mysqli_real_escape_string($con,$ID); 
      
        $sql = "select *from book where Booked_Room = '$room' AND timeslot ='$timeS' AND date ='$date'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result); 
        if($count ==1){
            //Room and timeslot is already there you can't add it!
            $msg="<div class = 'alert alert->success'> Please select valid input timeslot could be taken!</div>" ;
        }
        else{
            //you can add it 
            $msg="<div class = 'alert alert->success'> Booking Successful</div>" ;
            $stmt->execute();
        }   
            
        
        
        

    $stmt->close();
    $mysqli->close();

}
?>


<!DOCTYPE html>
<html lang="en">
<title>Booking Workspace</title> 
    <style>
            body{
                background-color:#F3FDFF;
            }
            .content{
                max-width:500px; 
                margin:auto; 
            }
            table{  
            border-collapse: collapse;  
            width: 100%;   
            }  
            th,td{  
                border: 2px solid black;   
                padding: 15px;  
                text-align:center; 
            }  


</style>

    <body>
    
        <div class="container">
            
            <h1 class ="text-center">Book Date : <?php echo date('F d,Y',strtotime($date));?><br></br></h1><hr>
            <div class= "row">
                <div class="col-md-6 col-md-offset-3">
                <div class="content">
                    <table class = "center">
                            <tr>  
                            <br>
                                <th>Timeslot Input</th>  
                                  
                            </tr>  
                            <tr>  
                                <td>8:00AM-9:00AM</td>  
                                
                            </tr>  
                            <tr>  
                                <td>9:00AM-10:00AM</td>  
                               
                            </tr> 
                            <tr>  
                                <td>10:00AM-11:00AM</td>  
                               
                            </tr> 
                            <tr>  
                                <td>11:00AM-12:00PM</td>  
                            </tr>  
                            <tr>  
                                <td>12:00PM-1:00PM</td>  
                            </tr> 
                            <tr>  
                                <td>1:00PM-2:00PM</td>  
                            </tr> 
                            <tr>  
                                <td>2:00PM-3:00PM</td>  
                            </tr> 
                            <tr>  
                                <td>3:00PM-4:00PM</td>  
                            </tr> 
                            <tr>  
                                <td>4:00PM-5:00PM</td>  
                            </tr>
                         
                </div>

                
                    <?php echo isset($msg)?$msg:""?>
                    <form action"" method = "post" autocomplete="off">

                        <div class ="form-group">
                            <label for ="">RoomID</br> </label>
                            <input list ="room" name ="room" /></label>
                            <datalist id= "room">
                                <!-- TFDL -->
                                <option value ="TFDL100">
                                <option value ="TFDL101">
                                <option value ="TFDL102">
                                <!-- EEEL -->
                                <option value ="EEEL100">
                                <option value ="EEEL101">
                                <option value ="EEEL102">
                                <!-- ENG -->
                                <option value ="Eng100">
                                <option value ="Eng102">
                                <option value ="Eng103">
                                <!-- ICT -->
                                <option value ="ICT100">
                                <option value ="ICT101">
                                <option value ="ICT102">
                                
                                <!-- Mackimmie -->

                                <option value ="Mackimmie100">
                                <option value ="Mackimmie101">
                                
                                <option value ="TFDL101">
                                <option value ="TFDL101">
                                <option value ="TFDL101">


                            </datalist>
                        </div>

                        <div class ="form-group">
                            <label for ="">Timeslot</br> </label>
                            <input list="timeslot" name ="timeslot">
                            <datalist id ="timeslot">
                            
                                <option value ="8:00AM-9:00AM">
                                <option value ="9:00AM-10:00AM">
                                <option value ="10:00AM-11:00AM">
                                <option value ="11:00AM-12:00PM">
                                <option value ="12:00PM-1:00PM">
                                <option value ="1:00PM-2:00PM">
                                <option value ="2:00PM-3:00PM">
                                <option value ="3:00PM-4:00PM">
                                <option value ="4:00PM-5:00PM">
                                   
                            </datalist>
                            <br></br>
                        </div>


                        <div class ="form-group">
                            <label for ="">Email</br></label>
                            <input type="email" class ="form-control" name ="email">
                            <br></br>
                        </div>
                        <div class ="form-group">
                            <label for ="">ID</br></label>
                            <input type="text" class ="form-control" name ="id">
                            <br></br>
                        </div>

                        <!-- <div class ="form-group">
                            <label for ="">Event Name</br> </label>
                            <input type="text" class ="form-control" name ="comment">
                            
                        </div> -->

                        <button class="btn btn-primary"type ="submit" name ="submit">Submit</button>
                        <br>
                    </form>
                    </div>
                </div>
            </div>
            
            








    </body>

  

</html>