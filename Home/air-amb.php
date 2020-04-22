	<?php 
	session_start();
	include "dbcon2.php";

	?>
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
		<li><a href = "http://127.0.0.1/Project%20CSE-300/Home/news.php"> News</a></li>
		<li><a href = "http://127.0.0.1/Project%20CSE-300/Home/admin.php"> Logout</a></li>
		
	</ul>
	</nav>
<?php
								$res=mysqli_query($link,"select * from air");
								echo "<table class='table table-bordered'>";
								echo"<tr>";
								echo "<th>";echo "name"; echo "</th>";
								echo "<th>";echo "address"; echo "</th>";
								echo "<th>";echo "phone"; echo "</th>";
								echo "<th>";echo "amount"; echo "</th>";
								echo "<th>";echo "delivery"; echo "</th>";
								echo "<th>";echo "bill"; echo "</th>";
								echo "<th>";echo "Send"; echo "</th>";
								echo "<th>";echo "Paid"; echo "</th>";
echo"</tr>";
								while($row=mysqli_fetch_array($res))
								{
									echo "<tr>";
									echo "<td>"; echo $row["name"]; echo "</td>";
									echo "<td>"; echo $row["address"]; echo "</td>";
									echo "<td>"; echo $row["phone"]; echo "</td>";
									echo "<td>"; echo $row["amount"]; echo "</td>";
									echo "<td>"; echo $row["delivery"]; echo "</td>";
									echo "<td>"; echo $row["bill"]; echo "</td>";
									echo "<td>"; ?> <a href="send.php?id=<?php echo $row["id"]; ?>">Send</a> <?php echo  "</td>";
									echo "<td>"; ?> <a href="paid.php?id=<?php echo $row["id"]; ?>">Paid</a> <?php echo  "</td>";
									
								echo "</tr>";
								}
								echo "</table>"
								
								?>

</body>
</html>