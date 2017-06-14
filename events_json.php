<?php
require 'conn.php';
$user_email=_GET['user_email']

 //fetch table rows from mysql db
    $sql = "SELECT event_id,EventName from event inner join (select event_event_id from event_has_user where user_user_id=(select user_id from user where email_id ='$user_email')) t2 on event.event_id=t2.event_event_id;";

    $result = mysqli_query($conn, $sql) or die("Error in Selecting " . mysqli_error($conn));

    //create an array
    $eventarray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $eventarray[] = $row;
    }

    echo json_encode($eventarray);

 mysqli_close($conn);
 ?>
