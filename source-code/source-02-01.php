<?php
	if( !empty( $_SESSION['loggedin'] ) || !empty( $_COOKIE['Loggedin'] ) ){
		header("Location:http://www.google.com");
		exit();
	}
?>