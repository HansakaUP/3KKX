<?php

$email = $_GET['email'];

$con=@mysql_connect('localhost','root',""); 
mysql_select_db("subscribe",$con);

$query = "INSERT INTO mails(Email)
VALUES ('$email')";

if( mysql_query($query)) {
echo"done";
}

else{
echo"error";
}
?>
