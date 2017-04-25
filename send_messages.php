<?php
	require_once "config.php";
	error_reporting(E_ALL ^ E_NOTICE);
	//echo  "$_POST['username']";
	//if(isset($_POST["username"]) && isset($_POST["message"])){
	$name= $_POST['username'];

	$messages=$_POST['newMessage'];

	$messagetime=time();
	$sql="INSERT INTO `messages` (`username` ,`message`,`message_time`) VALUES ('$name','$messages','$messagetime')";
	if(mysqli_query($con,$sql)){
		echo "Successful insertion into table!";
	}
	else{
		echo 'Not inserted';
	}


?>