<?php
function build_calendar($month,$year){
    //tutorial from youtube on how to create a booking calendar in php and mysql
    //https://www.youtube.com/watch?v=adDHmMMSLJw&list=PLulnbIOAgre5M65C5mnKzCAbwER8Va-Ru&index=3
    //First we need an array of months 


    $mysqli = new mysqli('localhost','root','AppServ1!','workspace_booking_db'); 
    /*
    $stmt = $mysqli->prepare('SELECT * from booking where MONTH(date) = ? AND YEAR(date)=?');
    $stmt->bind_param('ss',$month,$year);
    $bookings=array(); 
    if($stmt->execute()){
        $result=$stmt->get_result(); 
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $bookings[] = $row['date']; 
            }
            $stmt->close();
        }
    }
    */


    $daysOfWeek = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');

    //First day of each month
    $firstDayOfMonth = mktime(0,0,0,$month,1,$year);
    
    //Get number oif days in each month
    $numberDays = date('t',$firstDayOfMonth); 

    //First day of the month
    $dateComponents = getdate($firstDayOfMonth);

    //Get name of month 

    $monthName =$dateComponents['month'];

    //Get index value 0-6 for the first dat of this month
    $dayOfWeek=$dateComponents['wday'];

    //Get curr date
    $dateToday = date('Y-m-d'); 

    
    $calendar="<center><h2>$monthName $year</h2>"; 

    // $calendar.="<a class='btn btn-primary btn-xs'href='?month=".date('m',mktime(0,0,0,$month-1,1,$year))."&year=".date('Y',mktime(0,0,0,$month-1,1,$year))."'>Prev Month </a>";
    // $calendar.="<a class='btn btn-primary btn-xs'href='?month=".date('m')."&year=".date('Y')."'>Current Month </a>"; 
    // $calendar.="<a class='btn btn-primary btn-xs'href='?month=".$next_month."&year=$next_year'>Next Month</a></center>";

    
    $calendar.= "<br><table class='table table-bordered'>";

    $calendar.= "<tr>";

    foreach($daysOfWeek as $day){
        $calendar.="<th class='header'>$day</th>";

    }
    $calendar.= "</tr><tr>";
    $currentDay = 1; 
    // Will make sure 7 coloumns
    if($dayOfWeek>0){
        for($k=0;$k<$dayOfWeek;$k++){
            $calendar.="<td class ='empty'></td>";

        }
    }
    

    $month = str_pad($month,2,"0",STR_PAD_LEFT);

    while($currentDay<=$numberDays){

        //if seventh column is saturtday reached start a new row
        if($dayOfWeek==7){
            $dayOfWeek = 0; 
            $calendar.= "</tr><tr>";
        }



        $currentDayRel = str_pad($currentDay,2,"0",STR_PAD_LEFT);
        $date = "$year-$month-$currentDayRel";
        $dayName = strtolower(date('I',strtotime($date)));
        $today = $date==date('Y-m-d')?"today":"";


        if($date<date('Y-m-d')){
            $calendar.="<td><h3>$currentDay</h3><button class='btn btn btn-xs'>N/a</button>"; 
        }
        // else if(in_array($date,$bookings)){
        //     $calendar.= "<td ='$today'><h3>$currentDay</h3><a class='btn btn-danger btn-xs'>Booked</a></td>";
        // }
        else{
            $calendar.= "<td ='$today'><h3>$currentDay</h3><a href='book.php?date=".$date."'class='btn btn-success btn-xs'>Book</a></td>";
        }


        $currentDay++;
        $dayOfWeek++; 
    }

    if($dayOfWeek!=7){
        $remainingDays = 7-$dayOfWeek; 
        for($i =0;$i<$remainingDays;$i++){
            $calendar.="<td></td>"; 
        }
    }
    $calendar.="</tr>";
    $calendar.="</table>";
   // echo $calendar;

    return $calendar;


}

?>

<html>
<title>Calendar</title> 
    <style>
        body{
        background-color:#F3FDFF;
        }


    </style>
    <head> 
        
        
            <meta name = "viewport" content ="width=device-width,intial-scale=1.0">
            <link rel = "stylesheet" href ="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
            <style>
                @media only screen and(max-width:760px),
                (min-device-width:802px)and(max-device-width:1020px){
                    table,
                    thead,
                    tbody,
                    th,
                    td,
                    tr{
                        display:block;
                    }
                    .empty{
                        display:none;
                    }
                    th{
                        position:absolute;
                        top:-9999px;
                        left:-9999px;
                    }
                    tr{
                        border:1px solid #ccc; 
                    }
                    td{
                        border:none;
                        border-bottom:1px solid #eee; 
                        position:relative;
                        padding-left:50%;
                    }
                    td:nth-of-type(1):before{
                        content:"Sunday";
                    }
                    td:nth-of-type(2):before{
                        content:"Monday";
                    }
                    td:nth-of-type(3):before{
                        content:"Tuesday";
                    }
                    td:nth-of-type(4):before{
                        content:"Wednesday";
                    }
                    td:nth-of-type(5):before{
                        content:"Thursday";
                    }
                    td:nth-of-type(6):before{
                        content:"Friday";
                    }
                    td:nth-of-type(7):before{
                        content:"Saturday";
                    }
                }
                @media(min-width:641px){
                    table{
                        table-layout:fixed;
                    }
                    td{
                        width:33%;
                    }
                }
                .row{
                    margin-top:20px; 
                }
                .today{
                    background:yellow; 
                }
                

            </style>

    </head>

        <body>
            <div class = "container">
                <div class = "row">
                    <div class = "col-md-12">
                        <?php 
                        $dateComponents= getdate(); 
                        $month = $dateComponents['mon'];
                        $year = $dateComponents['year'];
                        echo build_calendar($month,$year);

    ?>

            </div>
        </div>
    </div>
    </body>
</html>
