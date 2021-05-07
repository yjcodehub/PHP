<?php 
	extract($_POST);
	if (isset($regUpdate)) {
		/*Database Connectivity*/
		$con  = new mysqli("localhost", "root", "", "reg_10am");

		/*Write Query*/
		$query = "UPDATE users SET name='$fname', email='$uemail', password='$upassword', mobile='$umobile' WHERE id = '$userId'";

		/*Execute the query*/
		$result = $con->query($query);

		if ($result) {
			header('location:view.php');
		}
		else{
			echo mysqli_error($con);
		}

	}
 ?>