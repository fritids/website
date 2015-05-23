<?php

define("IN_ARC", true);

// Start DB Connection
require_once ('includes/db_start.php');
$connection->dbSelect(constant("DATABASE"));

///// START / API ///////
$json = null;
if(isset($_GET["users"])) {
	$i = 0;
	$users = array();
	$getUserSQL = "SELECT `username`, `user_email` "
    . "FROM `phpbb_users` "
    . "WHERE `user_id` NOT IN (SELECT `user_id` FROM `phpbb_profile_fields_data` WHERE `pf_newsletter` = 2) "
    . "AND `group_id` IN (2,5) AND `user_inactive_time` = 0 "
    . "ORDER BY `user_id`;";
	$getUserQuery = mysqli_query($connection->getConnect(), $getUserSQL);
	
	// Add Users to Array
	while($user = mysqli_fetch_array($getUserQuery)) {
		$users[] = array("username" => $user["username"], "user_email" => $user["user_email"]);
	}
	
	$json["users"] = $users;
}

echo json_encode($json);
///// END / API ///////

// Stop DB Connection
require_once "includes/db_stop.php";

?>