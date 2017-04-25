<?php
	$con =  mysqli_connect("localhost","root","");
	$db = mysqli_select_db($con,"chat");
	if(!$con)
	{
		echo "not connected";
	}
	$sql=mysqli_query($con,$db);
	
	
?>