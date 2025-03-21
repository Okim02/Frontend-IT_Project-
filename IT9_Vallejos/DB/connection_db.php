<?php 

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "db_event";

	$con = new mysqli($servername,$username,$password,$dbname);

	if ($con) {
		echo "connected";
	}else{
		echo "error fuck!";
	}

 ?>