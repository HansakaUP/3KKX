<?php

$email = $_GET['email'];
$first_name = $_GET['first_name'];
$last_name = $_GET['last_name'];
$user_name = $_GET['user_name'];
$soft_name = $_GET['soft_name'];
$soft_version = $_GET['soft_version'];
$soft_year = $_GET['soft_year'];
$subject = $_GET['subject'];

$con=mysql_connect("localhost","root","");
mysql_select_db("soft1",$con);

$query = "UPDATE request1 SET
First_Name='$first_name',Last_Name='$last_name',User_Name='$user_name',Software_Name='$soft_name',Software_Version='$soft_version',Software_Year='$soft_year',Comment='$subject' WHERE Email='$email'";

if( mysql_query($query)) {
header('Location: select.php');
}
else{
echo"error".$recordid;;
}
?>