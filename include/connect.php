<?php
	$serverName = "localhost";
	$userName = "root";
	$password = "";
	$dbName = "phonebook";

	$connect = mysqli_connect($serverName, $userName, $password, $dbName);
	
	if(!$connect){
		die("Conection failed: ");
	}
	
?>