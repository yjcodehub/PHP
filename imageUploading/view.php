<?php 
	/*Connectivity*/
	$con = new mysqli('localhost', 'root', '', 'reg_10am');
	/*Query*/
	$query = "SELECT * FROM gallery";
	/*Execute Query*/
	$result = $con->query($query);
 ?>
<!DOCTYPE html>
<html>
	<head>
		<title>View Image</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	</head>
	<body>

		<div class="container">
			<h1 class="text-center">View Your Images</h1>
			<a href="register.php" class="btn btn-primary float-right">Register</a>
			<div class="clearfix"></div>
			<div class="row">
				<?php 
					while ($data=$result->fetch_object()) {
				?>
					<div class="col-3 mb-3">
						<div class="card">
							<a href="uploads/<?php echo $data->galleryName ?>"><img src="uploads/<?php echo $data->galleryName ?>" class="card-img-top" style="height: 170px"></a>
						</div>
					</div>
				<?php
					}
				 ?>
			</div>
		</div>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	</body>
</html>