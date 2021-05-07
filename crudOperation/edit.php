<?php 
	$editId = $_GET['editId'];
	//Mysql Connectivity
	$con = new mysqli("localhost", "root", "", "reg_10am");
	//Write a query
	$query = "SELECT * FROM users WHERE id = '$editId'";
	//execute Query
	$result = $con->query($query);
	//Data Fetch
	$data = $result->fetch_object();

 ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Edit Regsitration Form</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	</head>
	<body>

		<div class="container">
			<div class="row">
				<div class="offset-4 col-4 offset-4">
					<h2 class="mb-4 text-center">Edit Register Form</h2>
					<form method="post" action="update.php">
						<input type="hidden" name="userId" value="<?php echo $data->id?>">
						<div class="form-group">
							<label for="fname">Full Name</label>
							<input type="text" name="fname" id="fname" class="form-control" value="<?php echo $data->name?>"></input>
						</div>
						<div class="form-group">
							<label for="uemail">Email</label>
							<input type="email" name="uemail" id="uemail" class="form-control" value="<?php echo $data->email?>"></input>
						</div>
						<div class="form-group">
							<label for="upassword">Password</label>
							<input type="password" name="upassword" id="upassword" class="form-control" value="<?php echo $data->password?>"></input>
						</div>
						<div class="form-group">
							<label for="umobile">Mobile</label>
							<input type="text" name="umobile" id="umobile" class="form-control" value="<?php echo $data->mobile?>"></input>
						</div>
						<button type="submit" name="regUpdate" class="btn btn-primary float-right">Update</button>
					</form>
				</div>
			</div>
		</div>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	</body>
</html>