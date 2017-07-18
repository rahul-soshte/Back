<?php
require 'conn.php';

$argument=$_POST['argument'];
$sql="SELECT * from BorrowList where thing_name LIKE '$argument%';";

$result = mysqli_query($conn, $sql);

   //create an array
    $thingsarray = array(); 

   while($row = mysqli_fetch_assoc($result))
    {
        $thingsarray[] = $row;
    }

    echo json_encode($thingsarray);

 mysqli_close($conn);
?>