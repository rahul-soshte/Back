
<?php
require 'conn.php';
$event_id=$_POST['event_id'];
$sql="SELECT * from user_has_coordinates where event_id_fk=$event_id;";
//mysqli_query($conn,$sql);

 $result = mysqli_query($conn,$sql);
 //create an array
    $coordinatearray = array();
    while($row = mysqli_fetch_assoc($result))
    {
        $coordinatearray[] = $row;
    }

    echo json_encode($coordinatearray);

 mysqli_close($conn);
?>
