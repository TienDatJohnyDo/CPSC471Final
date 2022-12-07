<html>
<style>
            body{
                background-color:#F3FDFF;
            }


</style>
  
<head>  
    <title>Add Workspace</title>  
     
    <link rel = "stylesheet" type = "text/css" href = "style.css">   
</head>  
<body>  
    <div id = "frm">  
        <h1>Add Workspace </h1>  
        <form name="f2" action = "checkWorkspace.php" onsubmit = "return noti()" method = "POST">  
            <p>  
                <label> <br>Enter New RoomID:</br> </label>  
                <input type = "text" id ="RoomID" name  = "RoomID" />  
            </p>  
            <p>  
                <label> <br>Enter New Room Number: </br></label>  
                <input type = "text" id = "RoomNumber" name  = "RoomNumber" />  
            </p> 
            
            <p>  
                <label> <br>Enter Building Name:</br> </label>  
                <input type = "text" id ="Buildingname" name = "BuildingName" />  
            </p>  

            <p>  
                <label> <br>Enter Capacity: </br> </label>  
                <input type = "text" id ="Capacity" name = "Capacity" />  
            </p>  
            
            <p>     
                <input type =  "submit" name = "submit" id = "btn" value = "Submit New Workspace" />  
            </p>  
        </form>  
    </div>  
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("Fields are empty");  
                    return false;  
                }  
                                           
            }  
        </script> 
</html>