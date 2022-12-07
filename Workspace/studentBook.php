<?php

if(isset($_GET['date'])){

    $date=$_GET['date'];
}
if(isset($_POST['submit'])){
    $room = $_POST['roomid'];
    $email = $_POST['email'];
    $id = $_POST['id']; 
    
    
    // $mysqli = new mysqli('localhost','root','AppServ1!','workspace_booking_db');
    
    // $stmt = $mysqli->prepare("INSERT INTO booking(email,id,date) VALUES(?,?,?)");
    // $stmt->bind_param('sss',$email,$id,$date);
    // $stmt->execute(); 
    // $msg ="<div class='alert alert-sucess'>Booking Successfull !</div>";
    // $stmt->close();
    // $mysqli->close();

        $mysqli = new mysqli('localhost','root','AppServ1!','workspace_booking_db');
        
        $stmt = $mysqli->prepare("INSERT INTO booked(Booked_Room,Email,ID,date) VALUES(?,?,?,?)");
        $stmt->bind_param('ssss',$room,$email,$id,$date);
        $stmt->execute(); 

        $room = stripcslashes($room);  
        $email = stripcslashes($rmail);  
        $id = stripcslashes($id);
        $room = mysqli_real_escape_string($con, $room);  
        $email = mysqli_real_escape_string($con, $email);
        $id = mysqli_real_escape_string($con,$id); 
      
        $sql = "select *from booked where Booked_Room = '$room'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);   
        if($count==0){
            $msg ="<div class='alert alert-sucess'>Please try again !</div>";
        }
    else{
        $msg ="<div class='alert alert-sucess'>Booking Successfull !</div>";
    }
    
    
    
    $stmt->close();
    $mysqli->close();

}
?>


<!DOCTYPE html>
<html lang="en">

    <body>
        <div class="container">
            <h1 class ="text-center">Book Date : <?php echo date('F d,Y',strtotime($date));?><br></br></h1><hr>
            <div class= "row">
                <div class="col-md-6 col-md-offset-3">
                    <?php echo isset($msg)?$msg:"" ?>
                    <form action"" method = "post" autocomplete="off">
                        <div class ="form-group">
                            <label for ="">Room</label>
                            <input type="text" class ="form-control" name ="roomid">
                            <br></br>
                        </div>
                        <div class ="form-group">
                            <label for ="">Email</label>
                            <input type="email" class ="form-control" name ="email">
                            <br></br>
                        </div>
                        <div class ="form-group">
                            <label for ="">ID</label>
                            <input type="text" class ="form-control" name ="id">
                        </div>
                        <br></br>
                        <button class="btn btn-primary"type ="submit" name ="submit">Submit</button>
                    </form>
                    </div>
                </div>
            </div>
    </body>

  

</html>