<?php 
	define(DB_SERVER, 'localhost');
	define(DB_USERNAME, 'root');
	define(DB_PASSWORD, 'root');
	define(DB_NAME, 'maintable');

$Connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
	if ($Connection) {
		echo "Connection is OK". "<br />";
	} else {
		echo "Something is wrong" . "<br />";
	}
 ?>