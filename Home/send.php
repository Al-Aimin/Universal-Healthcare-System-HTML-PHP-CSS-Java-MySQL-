<?php
include "dbcon2.php";
$id=$_GET["id"];
mysqli_query($link,"update street set delivery='send' where id=$id");
?>

<script type="text/javascript">
	window.location="amb-reg.php";
</script>