<?php

$recordid = $_GET['email1']; 
$con=mysql_connect("localhost","root",""); 
mysql_select_db("soft1",$con);

$query = "DELETE FROM request1 where Email ='$recordid'";

if( mysql_query($query))     {
header('Location: select.php');
} else{
echo"error".$recordid;;
}
?>