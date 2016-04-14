<?php
class Database
{
	private $host 		= 'localhost';
	private $database 	= 'rest_api_db';
	private $username 	= 'root';
	private $password 	= '';
	private $conn;
	private static $instance;

	private function __construct() {
		$this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);

		// Handle the error
		if( mysqli_connect_error() ) {
			trigger_error('Failed when conencting to MySQL: ' . mysql_connect_error(), E_USER_ERROR);
		}
	}

	public static function getInstance() {
		if(!self::$instance) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	public function dbConn() {
		return $this->conn;
	}
}
