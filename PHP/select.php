<?php
$con=@mysql_connect('localhost','root',"");
mysql_select_db("soft1",$con);

$query = "SELECT * FROM request1";
$result =mysql_query($query);

echo "<table border='1' width='100%'>
<th width='15%'>Email</th>
<th width='10%'>First_Name</th>
<th width='10%'>Last_Name</th>
<th width='10%'>User_Name</th>
<th width='15%'>Software_Name</th>
<th width='10%'>Software_Version</th>
<th width='5%'>Software_Year</th>
<th width='30%'>Comment</th></tr>";


while($row = @mysql_fetch_array($result)) {

echo "<tr>";
echo "<td width='15%'>".$row['Email']."</td>";
echo "<td width='10%'>".$row['First_Name']."</td>";
echo "<td width='10%'>".$row['Last_Name']."</td>";
echo "<td width='10%'>".$row['User_Name']."</td>";
echo "<td width='15%'>".$row['Software_Name']."</td>";
echo "<td width='10%'>".$row['Software_Version']."</td>";
echo "<td width='5%'>".$row['Software_Year']."</td>";
echo "<td width='30%'>".$row['Comment']."</td>";
echo "</tr>";
}

echo "</table>";
?>

<br>
<br>
<hr>
<h2>Delete Record</h2>
<form name="form6" method="get" action="delete.php"> 
 Email : <input type="text" name="email1">

 <input type="submit" name="delete" value="Delete">
</form>


<br>
<br>

<hr>
<h2>Update Record</h2>


<form  id="form7" name="form7" method="GET" action="update.php" >

    		<label for="email"><b>Email</b></label>
    			<input type="text" placeholder="Enter Email" name="email" ><br><br>


    		<label for="email"><b>First Name</b></label>
    			<input type="text" placeholder="Enter First Name" name="first_name" ><br><br>


    		<label for="email"><b>Last Name</b></label>
    			<input type="text" placeholder="Enter Last Name" name="last_name" ><br><br>



    		<label for="email"><b>User Name</b></label>
    			<input type="text" placeholder="Enter User Name" name="user_name" ><br><br>



    		<label for="email"><b>Software Name</b></label>
    			<input type="text" placeholder="Enter Software Name" name="soft_name" ><br><br>


    		<label for="email"><b>Software Version</b></label>
    			<input type="text" placeholder="Enter Software Version" name="soft_version" ><br><br>



    		<label for="email"><b>Software Year</b></label>
    			<input type="text" placeholder="Enter Software Year" name="soft_year" ><br><br>



    		<label for="subject"><b>Comment</b></label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea><br><br>



    			<div class="clearfix">
      				<button name="btn_update" type="submit" class="signupbtn">Update</button>
    			</div>
  			</div>
			</form>

		<hr>


