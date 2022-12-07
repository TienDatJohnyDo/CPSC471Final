<html>
    <title>Student Page</title> 
<style>
            body{
                background-color:#F3FDFF;
            }


    </style>
    <head>
    <body>
        <div>
        <h1 style="text-align:center;">Student Workspace Portal</h1>
            <form action="searchWork.php" style="text-align:center;" method="POST">
                <input type="Submit"id = "btn" value = "Search Workspace"/>
            </form>
        </div>

        <div> 
        
            <form action="selectWork.php" style="text-align:center;" method="POST">
                <input type="Submit"id = "btn" value = "Select Workspace"/>
            </form>
        </div>

        <div> 
        
            <form action="viewWork.php" style="text-align:center;" method="POST">
                <input type="Submit"id = "btn" value = "View Workspace  "/>
            </form>
    
        </div>
        <div> 
        
            <form action="feed.php" style="text-align:center;" method="POST">
                <input type="Submit"id = "btn" value = "Submit Feedback  "/>
            </form>

            
        </div>
    </body>
</html>