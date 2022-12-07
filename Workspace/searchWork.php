<?php 

include('connection.php');

$sql = "SELECT Distinct Bname from workspace_room"; 
$result = mysqli_query($con,$sql); 

?>

<!DOCTYPE html>
<title>Search Workspace</title> 
<html>
        <title>Searching Workspaces</title>
        <script type = "text/javascript" src ="fetchWork.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <style >
            .content{
                max-width:500px; 
                margin:auto; 
            }

            table{
                border : 1px solid; 
                border-collapse:collapse;
                padding:10px;

            }
            th,td,tr{
                border:1px solid; 
            }
            body{
                background-color:#F3FDFF;
            }
        </style>

        <body>
            <div class ="content">
                <h3>Please Search Workspaces in Buildings</h3>
                
                <select id ="Bname" onchange = "selectBname()" >
                <br></br>
                    <?php while($rows =mysqli_fetch_array($result)){
                            ?>
                            <option value= "<?php echo $rows['Bname'];  ?>" > <?php echo $rows['Bname'];?> </option>
                            

                    <?php
                    }
                    ?>

                </select>
                <table class = "center">
                    <thead>
                        <th style ="width: 30%"> RoomID </th>
                        <th style ="width: 30%"> Room_number </th>
                        <th style ="width: 30%"> Capacity </th>
                    </thead>
                    <tbody id ="ans">
                


                    </tbody>

                </table> 
            </div>     
            
            
                

        </body>
</html>
