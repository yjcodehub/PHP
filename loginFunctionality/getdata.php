<?php 
	extract($_POST);
	if (isset($regSubmit)) {
		/*Database Connectivity*/
		$con  = new mysqli("localhost", "root", "", "reg_10am");

		/*Write Query*/
		$query = "INSERT INTO users VALUES(NULL, '$fname', '$uemail', '$upassword', '$umobile',1)";

		/*Execute the query*/
		$result = $con->query($query);

		if ($result) {
			header('location:login.php');
		}
		else{
			echo mysqli_error($con);
		}

	}
 ?>