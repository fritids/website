<?php

	/*if(!constant('IN_ARC')) {
		header("Location: /");
	}*/
	
	require_once ("MySQLConnection.php");
	
	// Disconnect from Database
	$connection->disconnect();
?>
