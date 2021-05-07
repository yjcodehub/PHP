<?php 
	require 'session.php';
	//Mysql Connectivity
	$con = new mysqli("localhost", "root", "", "reg_10am");
	//Write a query
	$query = "SELECT * FROM users WHERE is_deleted = 1";
	//Execute the Query
	$result = $con->query($query);//Table related info like field count and row entries
	//Data fetch

 ?>
<!DOCTYPE html>
<html>
	<head>
		<title>View Data Table</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	</head>
	<body>	

		<div class="container">
			<div class="row mt-4">
				<div class="col">
					<h1>Hii <?php echo $_SESSION['name'] ?> View Table...!</h1>
					<a href="register.php" class="btn btn-primary float-right mb-4">Register first</a>
					<a href="logout.php" class="btn btn-danger float-right mb-4 mr-3">LOGOUT</a>
					<table class="table table-dark table-bordered">
						<thead class="thead-light">
							<tr>
								<th>Sr.No</th>
								<th>Name</th>
								<th>Email</th>
								<th>Password</th>
								<th>Mobile</th>
							</tr>
						</thead>
						<?php 
							//Data fetch
							while ($data = $result->fetch_object()) {
								echo "<tr>";
									echo "<td>$data->id</td>";
									echo "<td>$data->name</td>";
									echo "<td>$data->email</td>";
									echo "<td>$data->password</td>";
									echo "<td>$data->mobile</td>";
								echo "</tr>";
							}
						 ?>
					</table>
				</div>
			</div>
		</div>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	</body>
</html>