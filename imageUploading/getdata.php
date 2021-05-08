<?php 
	echo "<pre>";
	print_r($_FILES);

	$img_name = $_FILES['image']['name'];
	$img_type = $_FILES['image']['type'];
	$img_tmp_name = $_FILES['image']['tmp_name'];

	$destination = "uploads/".$img_name;
	/*Connectivity*/
	$con = new mysqli('localhost', 'root', '', 'reg_10am');
	/*Query*/
	$query = "INSERT INTO gallery VALUES (NULL, '$img_name')";

	if (move_uploaded_file($img_tmp_name, $destination)){
		if ($con->query($query)) {
			header('localtion:view.php');
		}
		else{
			echo "Your file uploaded but not submitted";
		}

	}
	else{
		echo "Your file doesn't uploaded and submitted";
	}
	// $result = $con->query($query);

	/*
		imageGallery
			admin- -> name, email, password, confirm password, mobile
			

	*/
 ?>