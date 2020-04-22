<?php
include "dbcon2.php";
$id=$_GET["id"];
mysqli_query($link,"update air set bill='paid' where id=$id");
?>

<script type="text/javascript">
	window.location="amb.php";
</script>