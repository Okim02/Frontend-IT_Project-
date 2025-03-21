<?php 

	require ("connection_db.php");

	$sql = "CREATE DATABASE db_event";
	$query = mysqli_query($con,$sql);

	if ($query) {
		echo "Database Created";

	}else{
		echo "Error Fuck!";
	}

 ?>