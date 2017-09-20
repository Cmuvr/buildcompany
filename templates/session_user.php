<?php
	$query="SELECT * FROM users WHERE id=".$_SESSION['id'];
	$con=mysqli_query($dbcon, $query);
	if(!$con){
		exit($query);
	}
	
	$session_user=mysqli_fetch_array($con);