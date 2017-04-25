<?php
	
	require_once  "config.php";
	require_once  "check.php";
	if(isset($_POST["username"])){
	$name = check($_POST["username"]);
	$time = time();
	$insert="INSERT INTO `users` (`name`,`join_date`) VALUES ('$name','$time')";

	if(mysqli_query($con,$insert)){
		echo "Successful";
	}
	else{
		echo "Not inserted into database";
	}

}
?>