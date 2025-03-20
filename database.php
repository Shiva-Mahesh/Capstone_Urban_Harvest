<?php

	function prepare_string($dbc, $string) {
		$string = mysqli_real_escape_string($dbc, trim($string));
		return $string;
	}

	define('DB_USER', 'admin');
	define('DB_PASSWORD', '12345');
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'urbanharvest');

	$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
		OR die('Could not connect to MySQL: ' . mysqli_connect_error());
	mysqli_set_charset($dbc, 'utf8');
?>