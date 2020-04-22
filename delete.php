<?php

include 'dbcon.php';

$id = $_GET['id'];

$q= "DELETE FROM `student` WHERE id= $id ";

mysqli_query($con, $q);

header('location:display.php');

?>