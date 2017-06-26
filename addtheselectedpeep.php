<?php
require 'conn.php';
$event_id=$_POST['event_id'];
$json=$_POST['json'];

$user_in_event=json_decode($json);
/*
$jsonIterator = new RecursiveIteratorIterator(
    new RecursiveArrayIterator(json_decode($json, TRUE)),
    RecursiveIteratorIterator::SELF_FIRST);

foreach ($jsonIterator as $key => $val) {
    if(is_array($val)) {
        echo "$key:\n";

    } else {
        echo "$key => $val\n";
    }
}
*/

for($i=0;$i<sizeof($user_in_event);$i++)
{
$sql="INSERT into event_has_user values($event_id,$user_in_event[$i]);";

mysqli_query($conn,$sql);	

}

echo 'Users successfully added';

?>
