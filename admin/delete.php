<?php

	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"cms");
	$query = "delete from patient where id = $_GET[id]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Record Deleted...");
	window.location.href = "patdel.php";
</script>
