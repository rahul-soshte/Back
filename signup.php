<?php
require 'conn.php';
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$user_email=$_POST["user_email"];
$user_pass=$_POST["pass_word"];
$username=$_POST['username'];

$mysql_qry1="select * from user where email_id='$user_email';";
$check=mysqli_query($conn,$mysql_qry1);
$checkrows=mysqli_num_rows($check);
if($checkrows>0)
{
	echo "1 account is already associated with this email address";
}
else{
$mysql_qry="Insert into user (fname,lname,email_id,password,username) values ('$fname','$lname','$user_email','$user_pass','$username');";
if($conn->query($mysql_qry) === TRUE)
{
echo "Insert success";
}
else{
echo "Error:".$mysql_query."<br>".$conn->error;
}
}
$conn->close();
?>