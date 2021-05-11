<?php 
	extract($_POST);
	/*Database Connectivity*/
	$con  = new mysqli("localhost", "root", "", "reg_10am");
	if (isset($regSubmit)) {
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
	elseif(isset($messageSubmit)){
		/*Write Query*/
		$query = "INSERT INTO message VALUES(NULL, '$message', '$userId', NOW())";

		/*Execute the query*/
		$result = $con->query($query);

		if ($result) {
			header('location:message.php');
		}
		else{
			echo mysqli_error($con);
		}
	}
 ?>