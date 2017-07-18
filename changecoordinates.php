<?php
require 'conn.php';

$event_id=$_POST['event_id'];
$user_email=$_POST['user_email'];
$latitude=$_POST['latitude'];
$longitude=$_POST['longitude'];

$sql="UPDATE user_has_coordinates set UserLat=$latitude,UserLong=$longitude where event_id_fk=$event_id AND user_id_fk=(select user_id from user where email_id='$user_email');";

mysqli_query($conn,$sql);

echo "Changed";

$conn->close();

?>

