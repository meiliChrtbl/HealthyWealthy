<?php  

	// ini koneksi ke database db_wisata
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "health";

	$connection = mysqli_connect($servername, $username, $password, $dbname);
	if(!$connection){
		die("Connection Failed : ".mysqli_connect_error());
	}

?>