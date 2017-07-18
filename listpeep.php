//listpeep
<?php
require 'conn.php';
$event_id=$_POST['event_id'];
//$user_id=$_POST['user_id'];
$sql="SELECT * from user inner join (select user_user_id from event_has_user where event_event_id=$event_id) t2 on user.user_id=t2.user_user_id;";
$result = mysqli_query($conn, $sql); 

 $eventarray = array();
    while($row = mysqli_fetch_assoc($result))
    {
        $eventarray[] = $row;
    }

    echo json_encode($eventarray);

 mysqli_close($conn);
?>
