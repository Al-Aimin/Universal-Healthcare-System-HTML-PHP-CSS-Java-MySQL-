<?php
	session_start();
	session_destroy();
	$_SESSION['message'] = "You are now logged out";
	header('location: http://127.0.0.1/Project%20CSE-300/index2.php');
	?>