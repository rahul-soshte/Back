<?php
require 'conn.php';
//$user_event_id=$_POST['event_id'];
$argument=$_POST['argument'];

//$user_email=$_POST['user_email'];
//$friend_user_name=$_POST['friend_user_email'];

$sql="SELECT * from user where fname LIKE '$argument%' OR lname LIKE '$argument%' OR username LIKE '$argument';";

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

