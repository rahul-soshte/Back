<?php
require 'conn.php';
$user_email=$_POST['user_email'];
//$user_email='rahul.soshte47@gmail.com';

 //fetch table rows from mysql db
    $sql = "SELECT event_id,EventName from event inner join (select event_event_id from event_has_user where user_user_id=(select user_id from user where email_id ='$user_email')) t2 on event.event_id=t2.event_event_id;";

    $result = mysqli_query($conn, $sql); //or die("Error in Selecting " . mysqli_error($conn));

    //create an array
    $eventarray = array();
    while($row = mysqli_fetch_array($result))
    {
        array_push($eventarray,array("event_id"=>$row[0],"EventName"=>$row[1]));
    }

    //echo json_encode($eventarray);
 echo json_encode(array("server_response"=>$eventarray));

 mysqli_close($conn);
 ?>
 
