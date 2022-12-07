<?php      
    include('connection.php');  
    
        $RoomID = $_POST['RoomID'];
        $Room_number = $_POST['RoomNumber'];
        $Bname = $_POST['BuildingName'];
        $Capacity = $_POST['Capacity'];
        

        $sql = "INSERT INTO workspace_room(RoomID,Room_number,Bname,Capacity)
        VALUES ('$RoomID','$Room_number','$Bname','$Capacity')";
        if(mysqli_query($con,$sql)){
            echo "Successfully Added new Worksapce!";
            
        }
        else{
            echo "Make sure this is a Valid New Workspace"; 
        }
       
             
?>  
