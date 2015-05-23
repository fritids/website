<?php

	if(!constant('IN_ARC')) {
		header("Location: /");
	}
	
	require_once ("var.php");
	require_once ("MySQLConnection.php");
	
	// Establish a connection
	$connection	= new MySQLConnection();
	$connection->connect(HOST.":".PORT, USERNAME, PASSWORD);
	
?>
