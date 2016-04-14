<?php
require_once('Database.php');
class Api
{
	protected $db;
	public $mysqli;

	public function __construct() {
		$this->dbConn();
	}

	public function dbConn(){
		$this->db = Database::getInstance();
		$this->mysqli = $this->db->dbConn();
	}

	public function getTasks(){
		$query = 'SELECT * FROM tasks ORDER BY task_priority';
		if ( $result = $this->mysqli->query($query) ) {
			while ($obj = $result->fetch_object()) {
				var_dump($obj);
			}
		}
	}


}
