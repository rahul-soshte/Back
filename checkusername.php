<?php
require 'conn.php';

$username=$_POST['username'];
$mysql_qry="select * from user where username='$username';";
$check=mysqli_query($conn,$mysql_qry);
$checkrows=mysqli_num_rows($check);

if($checkrows>0)
{
echo "Username already taken";
}
else{
	echo "Cool";
}

$conn->close();
?>