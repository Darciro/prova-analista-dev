<?php
require_once 'lib/API.php';
require_once('Database.php');
class MyAPI extends API
{
	protected $db;
	public $mysqli;
	public $tasks;

	public function __construct($request, $origin) {
		parent::__construct($request);
		$this->dbConn();
	}

	public function dbConn(){
		$this->db = Database::getInstance();
		$this->mysqli = $this->db->dbConn();
	}

	/**
	 * Example of an Endpoint
	 */
	protected function tasks() {
		if ($this->method == 'GET') {
			$query = 'SELECT * FROM tasks ORDER BY task_priority';
			if ( $result = $this->mysqli->query($query) ) {
				$temp_arr = array();
				while ($obj = $result->fetch_object()) {
					array_push($temp_arr, $obj);
				}
				return json_encode($temp_arr);
			}
		}
		elseif($this->method == 'PUT') {

			return "PUT Method detected";

		}
		else {
			return "Only accepts GET requests";
		}
	}
}