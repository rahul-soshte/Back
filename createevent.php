<?php
require 'conn.php';
$event_name=$_POST['eventname'];
$event_created_by_user=$_POST['user_email'];


$mysql_qry2="Insert into event(EventName) values('$event_name');";

if($conn->query($mysql_qry2)===TRUE)
{

$last_id = $conn->insert_id;

$mysql_qry3="INSERT INTO event_has_user(event_event_id,user_user_id) select E.event_id,U.user_id
from user U,event E where U.email_id='$event_created_by_user' AND E.event_id=$last_id;";

$mysql_qry4="INSERT INTO user_has_coordinates(user_id_fk,event_id_fk,UserLat,UserLong) select U.user_id,E.event_id,U.GpsLat,U.GpsLong from user U,event E where U.email_id='$event_created_by_user' AND E.event_id=$last_id;";

//echo "Event Created";
echo $last_id;

mysqli_query($conn,$mysql_qry3);
mysqli_query($conn,$mysql_qry4);

//	echo $event_created_by_user;
// echo "New record created successfully. Last inserted ID is: " . $last_id;


}
else{
  echo "Error:".$mysql_query."<br>".$conn->error;  
}
$conn->close();
?>