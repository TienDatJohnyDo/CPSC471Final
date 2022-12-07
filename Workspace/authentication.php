<?php      
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];
    $role = $_POST['role'];   
    
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $role = stripcslashes($role);
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);
        $role = mysqli_real_escape_string($con,$role); 
      
        $sql = "select *from login where username = '$username' and password = '$password' and role ='$role'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if(($count == 1) && ($role == Student)){ 
            echo "<h1><center> Login successful </center></h1>";  
            header("location: welcomeStu.php"); 
        }  
        else if(($count ==1) && ($role == Librarian)){
            echo "<h1><center> Login successful </centre></h1>";
            header("location: welcomeLib.php");
        }
        else if ($count ==1 && ($role == Admin)){
            echo "<h1><center> Login successful </centre></h1>";
            header("location: welcomeAdm.php");
        }
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
            //header("location :index.php");
        }     
?>  