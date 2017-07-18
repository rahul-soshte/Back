<?php
require 'conn.php';

$user_email=$_POST["user_email"];

$user_pass=$_POST["pass_word"];

$mysql_qry="select * from user where email_id='$user_email' and password='$user_pass';";

$result=mysqli_query($conn,$mysql_qry);

if(mysqli_num_rows($result) > 0)
{
echo "Welcome user!";

}else{
echo "login not success";
}

?>
