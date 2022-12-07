<html>
    <title>View Workspace</title> 
<style>
            .content{
                        max-width:500px; 
                        margin:auto; 
                    }
            body{
                background-color:#F3FDFF;
            }
            .Classname td{
                text-align:center; 
            }


    </style>
    
    <h1> Viewing Workspace</h1>

    
</html>


<?php      
    include ('connection.php');
    $sql = "SELECT * FROM workspace_room";
    $result =mysqli_query($con,$sql);
    
    
            echo "<table border = '1'>";
            
            echo "<center><tr><td>RoomID</td><td>Room Number</td><td>Buidling</td></tr></center>\n"; 
            while($row=mysqli_fetch_assoc($result)){
                
                echo"<tr><td>{$row['RoomID']}</td><td>{$row['Room_number']}</td><td>{$row['Bname']}</td><tr>\n";
            }
            echo "<center></table></center>";
    
?>