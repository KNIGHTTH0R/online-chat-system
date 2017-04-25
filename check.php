<?php
    require_once "config.php";
		function check($v)
	{
		$v = stripslashes($v);
		$v= htmlspecialchars($v);
		$v = htmlentities($v,ENT_QUOTES);
		//$v= mysqli_real_escape_string($con,$v);

		return $v;
	}
?>