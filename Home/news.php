<html>
<head>
	<title>Patient Record</title>
	<style type="text/css">
	table{
		border-collapse: collapse;
		width: 100%;
		color: #5887e;
		font-family: monospace;
		font-size: 17px;
		text-align: center;
	}
	th{
		background-color:#588c7e;
		color:white;
	}
	tr:nth-child(even) {background-color:#f2ff22}
	
	
	body
		{
		margin:0;
		padding:0;
		background:green;
		}
		nav
		{
		width:100%;
		background:black;
		overflow:auto;
		}
	ul
	{
		padding:0;
		margin: 0 0 0 190px;
		list-style:none; 
	}
	li
	{
	float:left;	
	}
	.logo img
	{
	position:absolute;
	margin-top:-2px;
	margin-left:10px;
	}
	nav a
	{
	width:120px;
	display:block;
	padding:20px 15px;
	text-decoration:none;
	font-family:Arial;
	color:#f2f2f2;
	text-algin:center;
	}
	nav a:hover
	{
	background:purple;
	transition:0.5s;
	text-transform:uppercase;
	}
	
	
	
	
	</style>
</head>
<body>
<div class ='logo'><a href ="#"><img src ="Logo3.png" width='185'></a>
	</div>
	<nav>
	<ul>
		<li><a href = "http://127.0.0.1/Project%20CSE-300/index2.php"> Home</a></li>
		<li><a href = "http://127.0.0.1/Project%20CSE-300/Home/records.php"> Register Record</a></li>
		<li><a href = "http://127.0.0.1/Project%20CSE-300/Home/amb.php"> Ambulance</a></li>
		<li><a href = "http://127.0.0.1/Project%20CSE-300/Home/air-amb.php"> Air Ambulance</a></li>
		<li><a href = "#"> News</a></li>
		<li><a href = "http://127.0.0.1/Project%20CSE-300/Home/admin.php"> Logout</a></li>
		
	</ul>
	</nav>



<table>
<tr>
	<th>Name:</th>
	<th> Phone:</th>
	<th>E-mail:</th>
	<th>Massege:</th>
	
</tr>

<?php
$con=mysqli_connect("localhost","root","","uhs");
if(!$con){
	
	echo"Database connection failed";
}
	$query="SELECT * From contact";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result)){
		echo"<tr>";
		echo"<td>".$row['fullname']."</td>";
		echo"<td>".$row['phoneno']."</td>";
		echo"<td>".$row['email']."</td>";
		echo"<td>".$row['msg']."</td>";
		echo"</tr>";
	}
?>
</table>
</body>
</html>