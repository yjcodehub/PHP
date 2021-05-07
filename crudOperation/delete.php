<?php 
	if (isset($_GET['deleteId'])) {
		$deleteId = $_GET['deleteId'];
		//Connectivity
		$con  = new mysqli("localhost", "root", "", "reg_10am");

		/*Write Query*/
		$query = "UPDATE users SET is_deleted = 0 WHERE id = '$deleteId'";

		/*Execute the query*/
		$result = $con->query($query);

		if ($result) {
			header('location:view.php');
		}
		else{
			echo mysqli_error($con);
		}
	}
	elseif (isset($_GET['hardDelId'])) {
		$hardDelId = $_GET['hardDelId'];
		//Connectivity
		$con  = new mysqli("localhost", "root", "", "reg_10am");

		/*Write Query*/
		$query = "DELETE FROM users WHERE id = '$hardDelId'";

		/*Execute the query*/
		$result = $con->query($query);

		if ($result) {
			header('location:archieve.php');
		}
		else{
			echo mysqli_error($con);
		}
	}
 ?>