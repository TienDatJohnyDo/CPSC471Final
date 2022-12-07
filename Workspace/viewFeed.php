<html>
    <title>View Feedback</title> 
<style>
            body{
                background-color:#F3FDFF;
            }


</style>
<h1> View Feedback </h1>
</html>


<?php      
    include ('connection.php');
    $sql = "SELECT * FROM feedback_relation";
    $result =mysqli_query($con,$sql);

    echo "<table border = '1'>";
    echo "<tr><td>Feedback #</td><td>Email</td><td>Comments</td></tr>\n"; 
    while($row=mysqli_fetch_assoc($result)){
        echo"<tr><td>{$row['Feedback_number']}</td><td>{$row['Email']}</td><td>{$row['comment']}</td><tr>\n";
    }
    echo "</table>";
    
?>


