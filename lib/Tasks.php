<?php
require_once 'lib/API.php';
require_once('Database.php');

class MyAPI extends API
{
	protected $db;
	public $mysqli;
	public $tasks;

	public function __construct($request, $origin)
	{
		parent::__construct($request);
		$this->dbConn();
	}

	public function dbConn()
	{
		$this->db = Database::getInstance();
		$this->mysqli = $this->db->dbConn();
	}

	/**
	 * Example of an Endpoint
	 */
	protected function tasks()
	{
		if ($this->method == 'GET') {
			$query = 'SELECT * FROM tasks ORDER BY task_priority';
			if ($result = $this->mysqli->query($query)) {
				$temp_arr = array();
				while ($obj = $result->fetch_object()) {
					array_push($temp_arr, $obj);
				}
				return json_encode($temp_arr);
			}
		} elseif ($this->method == 'POST') {
			if ($_REQUEST["task_name"] && $_REQUEST["task_priority"]) {
				$query = 'INSERT INTO tasks (task_name, task_desc, task_priority) VALUES ("' . $_REQUEST["task_name"] . '", "' . $_REQUEST["task_desc"] . '", ' . $_REQUEST["task_priority"] . ' )';
				$res = $this->mysqli->query($query);
				if (!$this->mysqli->error) {
					return 'Task Inserted successfully';
				} else {
					return $this->mysqli->error;
				}
			}
		} elseif ($this->method == 'DELETE') {
			if ($_REQUEST["task_ids"]) {
				foreach ($_REQUEST["task_ids"] as $id) {
					$query = 'DELETE FROM tasks WHERE tasks.id = "' . $id . '"';
					$this->mysqli->query($query);
				}
				return 'Task(s) deleted';
			} else {
				return 'Some error...';
			}
		} elseif ($this->method == 'PUT') {
			if ($_REQUEST["task_id"] && !isset($_REQUEST["update"])) {
				$query = 'UPDATE tasks SET tasks.task_name = "' . $_REQUEST["task_name"] . '", tasks.task_desc = "' . $_REQUEST["task_desc"] . '", tasks.task_priority="' . $_REQUEST["task_priority"] . '" WHERE tasks.id = "' . $_REQUEST["task_id"] . '"';
				$this->mysqli->query($query);
				return 'Task(s) updated: ' . $_REQUEST["task_id"];
			} elseif ($_REQUEST["task_id"] && $_REQUEST["update"] && $_REQUEST["task_priority"]) {
				$query = 'UPDATE tasks SET tasks.task_priority="' . $_REQUEST["task_priority"] . '" WHERE tasks.id = "' . $_REQUEST["task_id"] . '"';
				$this->mysqli->query($query);
			} else {
				return 'Some error...';
			}
		} else {
			return "Method not allowed";
		}
	}
}