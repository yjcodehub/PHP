<?php 
	session_start();
	$sessId = session_id();
	if ($sessId != $_SESSION['sessId']) {
		session_destroy();
		header('location:login.php');
	}
 ?>