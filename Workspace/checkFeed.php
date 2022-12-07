<?php      
    include('connection.php');  
    
        $feedNum = $_POST['Feedback_number'];
        $Email = $_POST['Email'];
        $comment = $_POST['comment'];
    
        $sql = "INSERT INTO feedback_relation (Feedback_number,Email,comment)
        VALUES ('$feedNum','$Email','$comment')";
        if(mysqli_query($con,$sql)){
            echo "Successfully Added Feeback!";
            
        }
        else{
            echo "Could not submit Feedback"; 
        }
       
             
?> 
<html>
    <title>Add Workspace</title> 
</html> 