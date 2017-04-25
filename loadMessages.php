<?php
	include "config.php";
?>
	<?php
	error_reporting(E_ALL ^ E_NOTICE);
		
//if(isset($row[`username`]) && isset($row[`message`]) && isset($row['$hoursandminutes'])){
	$tenminutesago= time()-800;
	$sql = "SELECT  * FROM `messages` WHERE `message_time`>$tenminutesago ORDER BY `message_time` ";
if($res= mysqli_query($con,$sql))//verifying the selectoin of the messages through this query
	{
		echo "";
	}
	else
	{
		echo "Not succesful";
	}
	
	while($row=mysqli_fetch_assoc($res))//fetching the table messages using this associative array method
	{
	$hoursandminutes=date('d F Y ',$row[`message_time`]);
		echo "<div style='margin-left:60px;>";
		echo "<em><b style='font-family:sans-serif;font-size:29px;color:green; '>";
		echo $row['username'];

		echo "</b>  says </em>";
		//echo " : (";
		//echo $hoursandminutes;
		//echo ") : ";
		echo " <i><p style='font-size:23px font-family:mono,sans-serif; color:grey;'>";
		echo '" ';
		echo $row['message'];
		echo ' "';
	echo "</p></i>";
		echo "<br>";
		echo "</div>";
		
	}

//
	?>