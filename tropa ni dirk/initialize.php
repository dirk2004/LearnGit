<?php
	
	session_start();

	$db_hostname = "localhost";
	$db_username = "root";
	$db_password = "";
	$db_name = "geronimo";
	$port = "3306";

	$connection = new mysqli($db_hostname, $db_username, $db_password, $db_name, $port);
