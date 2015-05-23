<?php
	if(!constant('IN_ARC')) {
		header("Location: /");
	}	
	/**
	 *	MySQLConnection class
	 */
	class MySQLConnection {
		// MySQL Connection
		private $connection = 0;		
		// Connected / DB Selected
		private $connected = 0;
		private $dbSelected = 0;		
		/**
		 * Default constructor
		 */
		function MySQLConnection() {
			//
		}
		/**
		 * Connect to database
		 * $host		Host Address
		 * $username	Username
		 * $password	Password
		 */
		function connect($host="localhost", 
						 $username="root", 
						 $password="password") {
			// Connect to MySQL
			$this->connection =  
				mysqli_connect($host, $username, $password) 
				or
				die("Cannot connect to MySQL!");				
			$this->connected = 1;
		}
		/**		 * Select Database
		 * $database	Name of the Database
		 */
		function dbSelect($database) {
			// Check if connected
			if (!$this->connected) {
				$this->connect();
			}
			// Select database
			mysqli_select_db($this->connection, $database) 
			or 
			die("cannot select DB");
			$this->dbSelected = 1;
		}
		/**
		 * Check if you are connected
		 * @return 1 if connected, 0 otherwise
		 */
		function connected() {
			return $this->connected;
		}
		/**
		 * Get connect
		 * @return
		 */
		function getConnect() {
			return $this->connection;
		}
	
		/**
		 * Disconnects from MySQL Server
		 */
		function disconnect() {
			$this->connected = mysqli_close($this->connection);
		}		
	}
?>