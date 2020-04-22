	<?php 
	session_start();
	include "dbcon2.php";

	?>
<html>
<head>
	<title>Welcome to- Universal Health Care</title>
	<style>
	body
		{
		margin:0;
		padding:0;
		background:gray;
		}
		nav
		{
		width:100%;
		background:black;
		overflow:auto;
		}
	ul
	{
		padding:10;
		margin: 0 0 0 200px;
		list-style:none; 
	}
	li
	{
	float:left;	
	}
	.logo img
	{
	position:absolute;
	margin-top:7px;
	margin-left:10px;
	}
	nav a
	{
	width:100px;
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
		<li><a href = "http://127.0.0.1/Project%20CSE-300/index2.php">Home</a></li>
		<li><a href = "http://127.0.0.1/Project%20CSE-300/register.php"> appoinment</a></li>
		<li><a href = "#"> news</a></li>
		<li><a href = "http://127.0.0.1/Project%20CSE-300/hOME/amb-reg.php"> Ambulance</a></li>
		<li><a href = "amb-reg2.php"> Air-Ambulance</a></li>
		<li><a href = "logout.php"> Logout</a></li>
		
		<div><h1>Welcome <?php echo $_SESSION['user']; ?></h1></div>
		
	</ul>
	</nav>

</body>

</html>

