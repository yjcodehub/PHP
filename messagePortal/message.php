<?php 
	include "session.php";
	/*Connectivity*/
	$con = new mysqli("localhost", "root", "", "reg_10am");
	/*Query*/
	$query = "SELECT * FROM message as m 
						INNER JOIN users as u 
						ON m.user_id = u.id";
			
	/*Execute the query*/
	$result = $con->query($query);
 ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Message Portal</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<h1 class="text-center">This is basic message Portal</h1>
			<div class="row">
				<div class="col-sm">
					<h3>Welcome <?php echo $_SESSION['name']; ?></h3>
					<a href="logout.php" class="btn btn-danger btn-sm float-right">Logout</a>
					<p>
						Email: <?php echo $_SESSION['email']; ?><br>
						Mobile: <?php echo $_SESSION['mobile']; ?>
					</p>
					<form method="post" action="getdata.php">
						<div class="form-group">
							<label for="message">Please Insert Message</label>
							<textarea name="message" id="message" class="form-control"></textarea>
						</div>
						<input type="hidden" name="userId" value="<?php echo $_SESSION['id']?>">
						<button type="submit" name="messageSubmit" class="btn btn-primary btn-block">Send</button>
					</form>
				</div>
				<div class="col-sm" style="overflow: auto;max-height: 250px">
					<?php 
						while ($data=$result->fetch_object()) {
					?>
						<p>
							<small><b><?php echo $data->name ?></b></small>: 
							<?php echo $data->message ?> 
						</p>
					<?php
						}
					 ?>
				</div>
			</div>
		</div>


		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	</body>
</html>