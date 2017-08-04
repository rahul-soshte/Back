<?php
require 'conn.php';
$argument=$_POST['argument'];
$user_email=$_POST['user_email'];
//$sql="SELECT * from rentProducts";
//$sql="SELECT idrent,prodname,prodimageurl,rentperday,user_id,username from 
//rentProducts inner join (select * from user where user_id != 2 ) t2 ON 
//rentProducts.user_id=t2.user_id";
$sql="SELECT t1.idrent,t1.prodname,t1.prodimageurl,t1.rentperday,t1.user_id,t2.username from (select * from rentProducts where prodname LIKE '%$argument%') t1 inner join (select * from user where email_id != '$user_email' ) t2 ON t1.user_id=t2.user_id";

$result = mysqli_query($conn, $sql);

$resultarray = array();
    while($row = mysqli_fetch_assoc($result))
    {
        $resultarray[] = $row;
    }
    echo json_encode($resultarray);

 mysqli_close($conn);
?>
