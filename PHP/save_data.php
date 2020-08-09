<?php

$email = $_GET['email'];
$first_name = $_GET['first_name'];
$last_name = $_GET['last_name'];
$user_name = $_GET['user_name'];
$soft_name = $_GET['soft_name'];
$soft_version = $_GET['soft_version'];
$soft_year = $_GET['soft_year'];
$subject = $_GET['subject'];

$con=@mysql_connect('localhost','root',""); 
mysql_select_db("soft1",$con);

$query = "INSERT INTO request1(Email,First_Name,Last_Name,User_Name,Software_Name,Software_Version,Software_Year,Comment)
VALUES ('$email','$first_name','$last_name','$user_name','$soft_name ','$soft_version','$soft_year','$subject')";

if( mysql_query($query)) {
header('Location: Requests.html');}

else{
echo"error";
}
?>
