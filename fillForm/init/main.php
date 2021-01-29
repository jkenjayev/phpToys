<?php 
	
	define(DB_SERVER, 'localhost');
	define(DB_USERNAME, 'root');
	define(DB_PASSWORD, 'root');
	define(DB_NAME, 'maintable');

$Connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

	function connDB() {
		
		if(Connection) {
			echo "Connection is OK with database";
		} else {
			echo "ERROR: Connection with database";
		}
	}

	function getAllUsers($connect) {
		$selection = "SELECT * FROM users";
		$selectionResult = mysqli_query($connect, $selection);
		while ($user = mysqli_fetch_assoc($selectionResult)) {
		echo $user['username'] . "<br />";
		echo $user['email'] . "<br />";
		echo $user['phoneNumber'] . "<br />";
		}
	}
	getAllUsers($Connection);

	function createUser($connect) {
		$insert = "INSERT INTO users (username, privateKey, email, phoneNumber) VALUES ('Islombek', 'Islombek-03', 'islombek@yahoo.com', 236487234)";
		$insertResult = mysqli_query($connect, $insert);
		if(insertResult) {
			echo "The data is inserted to the database";
		} else {
			echo "Something is wrong to insert data to the database";
		}	
	}
	createUser($Connection);
	
	function updateUser($connect) {
		$update  = "UPDATE users SET username = 'Nodirbek', privateKey = 'Nodirbek-08', email = 'nodirbek@gmail.com', phoneNumber = 34234798
		WHERE id=4";
		$updateResult = mysqli_query($connect, $update);
		if(updateResult) {
			echo "The data is successfully updated";
		} else {
			echo "The data is not updated";
		}
	}
	updateUser($Connection);

	function deleteUser($connect) {
		$delete = "DELETE FROM users WHERE id = 4";
		$deleteResult = mysqli_query($connect, $delete);
		if(deleteResult) {
			echo "The data is deleted";
		} else {
			echo "The deleted wrong";
		}	
	}
	deleteUser($Connection);
 ?>