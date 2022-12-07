<html>
<title>Feedback</title> 
<style>
        body{
                background-color:#F3FDFF;
        }


</style>
  
<head>  
    <title>Submit Feedback</title>  
     
    <link rel = "stylesheet" type = "text/css" href = "style.css">   
</head>  
<body>  
    <div id = "frm">  
        <h1>Add Workspace </h1>  
        <form name="f3" action = "checkFeed.php" onsubmit = "return validation()" method = "POST">  
            <p>  
                <label> <br>Enter Feedback Number </br></label>  
                <input type = "text" id ="Feedback_number" name  = "Feedback_number" />  
            </p>  
            <p>  
                <label> <br>Enter email: </br></label>  
                <input type = "email" id = "Email" name  = "Email" />  
            </p> 
            
            <p>  
                <label> <br>Enter Comments:</br> </label>  
                <input type = "text" id ="comment" name = "comment" />  
            </p>   
            
            <p>     
                <input type =  "submit" name = "submit" id = "btn" value = "Submit Feedback" />  
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