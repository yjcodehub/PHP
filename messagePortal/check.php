<?php 
	extract($_POST);
	if (isset($loginSubmit)) {
		/*Connectivity*/
		$con = new mysqli("localhost", "root", "", "reg_10am");
		/*Query*/
		$query = "SELECT * FROM users WHERE email = '$uemail' AND password = '$upassword'";
		/*Execute the query*/
		$result = $con->query($query);
		/*Data Fetch*/
		$data = $result->fetch_object();
		/*Row Fetch*/
		$rows = mysqli_num_rows($result);
		
		if ($rows == 1) {
			session_start();
			$_SESSION['sessId'] = session_id();
			$_SESSION['id'] = $data->id;
			$_SESSION['name'] = $data->name;
			$_SESSION['email'] = $data->email;
			$_SESSION['mobile'] = $data->mobile;
			header('location:message.php');
		}
		else{
			echo "Invalid credentials";
		}
	}
 ?>