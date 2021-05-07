<?php 
	$recoverId = $_GET['recoverId'];
	//Connectivity
	$con  = new mysqli("localhost", "root", "", "reg_10am");

	/*Write Query*/
	$query = "UPDATE users SET is_deleted = 1 WHERE id = '$recoverId'";

	/*Execute the query*/
	$result = $con->query($query);

	if ($result) {
		header('location:archieve.php');
	}
	else{
		echo mysqli_error($con);
	}
 ?>