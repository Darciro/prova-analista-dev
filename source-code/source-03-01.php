<?php
	class MyUserClass
	{
		public function getUserList()
		{
			$dbconn = new DatabaseConnection( 'localhost', 'user', 'password' );
			return $dbconn->query('SELECT name FROM user ORDER BY name');
		}
	}
?>