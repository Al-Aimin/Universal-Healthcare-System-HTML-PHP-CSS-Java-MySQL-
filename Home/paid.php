<?php
include "dbcon2.php";
$id=$_GET["id"];
mysqli_query($link,"update street set bill='paid' where id=$id");
?>

<script type="text/javascript">
	window.location="amb.php";
</script>