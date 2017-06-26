<?php
require 'conn.php';
//$user_event_id=$_POST['event_id'];
$argument=$_POST['argument'];
$event_id=$_POST['event_id'];

//$user_email=$_POST['user_email'];
//$friend_user_name=$_POST['friend_user_email'];

//$sql="SELECT * from user where fname LIKE '$argument%' OR lname LIKE '$argument%' OR username LIKE '$argument';";

$sql="SELECT * from (SELECT * from user where fname LIKE '$argument%' OR lname LIKE '$argument%' OR username LIKE '$argument') t2 left join (select user_user_id from event_has_user where event_event_id=$event_id) t3 on t2.user_id=t3.user_user_id where t3.user_user_id is null";

 $result = mysqli_query($conn, $sql);

   //create an array
    $eventarray = array();
    while($row = mysqli_fetch_assoc($result))
    {
        $eventarray[] = $row;
    }

    echo json_encode($eventarray);

 mysqli_close($conn);
?>

