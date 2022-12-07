<html>  
<style>
            body{
                background-color:#F3FDFF;
            }


    </style>
<head>  
    
    <title>Login Page</title>  
     
    <link rel = "stylesheet" type = "text/css" href = "style.css">   
</head>  
<body>  
    <div id = "frm">  
        <h1>Login to Workspace Booking System</h1>  
        <form name="f1" action = "authentication.php" onsubmit = "return validation()"  method = "POST">  
            <p>  
                <label> <br>Email:</br> </label>  
                <input type = "Email" id ="user" name  = "user" />  
            </p>  
            <p>  
                <label> <br>Password:</br> </label>  
                <input type = "password" id ="pass" name  = "pass" />  
            </p> 
            
            <p>  
                <label> Role:<br>(Student, Librarian or Admin)</br> </label>  
                <input type = "Role" id ="role" name  = "role" />  
            </p>  
            
            <p>     
                <input type =  "submit" id = "btn" value = "Login" />  
            </p>  
        </form>  
    </div>  
     
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
        
</body> 
    
</html>