<?php
include ('connection.php');
$k = $_POST['id']; 
$k = trim($k); 
$sql = "Select * from workspace_room where Bname='{$k}'";
$result = mysqli_query($con,$sql); 
while($rows = mysqli_fetch_array($result)){
    ?>
<tr>
    <td><?php echo $rows['RoomID'];     ?></td>
    <td><?php echo $rows['Room_number'];    ?></td>
    <td><?php echo $rows['Capacity'];   ?></td>

</tr>
    <?php
}
    echo $sql; 

?>
<html>
    <title>View Workspace</title> 
</html>