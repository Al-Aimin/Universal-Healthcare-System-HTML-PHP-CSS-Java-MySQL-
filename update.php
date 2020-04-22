<?php

include 'dbcon.php';

if(isset($_POST['done'])){

	$id = $_GET['id'];
	$name = $_POST['name'];
	$class = $_POST['class'];
	$section = $_POST['section'];
	$roll = $_POST['roll'];

	$q=" update register set id=$id, name='$name', class='$class', section='$section', roll='$roll' where id=$id";

	$query=mysqli_query($con,$q);

	header('location:display.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style2.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<div class="col-lg-6 m-auto">
	<form method="post">
		<br><br><div class ="card">
			<div class ="card-header bg-dark">
				<h1 class="text-white text-center"> UPDATE</h1>
			</div>

			<label>Name</label>
			<input type="text" name="name" class="form-control"><br>

			<label>Class</label>
			<input type="text" name="class" class="form-control"><br>

			<label>Section</label>
			<input type="text" name="section" class="form-control"><br>

			<label>Roll</label>
			<input type="text" name="roll" class="form-control"><br>

			<button class="btn btn-success" type="submit" name="done">Submit</button>

			

		</div>
	</form>

	<a href="index.html">
				<button class="btn btn-success center">HOME</button><br>
			</a>


</body>
</html>