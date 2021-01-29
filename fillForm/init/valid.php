<?php 
	require("connDB.php");
	if(isset($_POST['submit'])) {

		if(empty($_POST['username'])) {
			echo "Empty username field";
			die();
		} else {
			$username = $_POST['username'];

			if(!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
				echo "Invalid filling username";
				die();
			}
		}

		if(empty($_POST['phoneNumber'])) {
			echo "Empty phoneNumber field";
			die();
		} else {
			$phoneNumber = $_POST['phoneNumber'];

			if(!preg_match("/^[0-9]*$/", $phoneNumber)) {
				echo "Invalid filling phoneNumber field";
				die();
			} 
		}

		if(empty($_POST['email'])) {
			echo "Empty email feild";
			die();
		} else {
			$email = $_POST['email'];

			if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)) {
				echo "Invalid filling email field";
				die();
			}
		}

		if(empty($_POST['privateKey'])) {
			echo "Empty password field";
			die();
		} else {
			$password = $_POST['privateKey'];

			if(!preg_match("/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z-!@#$%]{8,12}$/", $password)) {
				echo "Invalid filling password field";
				die();
			}
		}


		$query = "INSERT INTO users (username, email, privateKey, phoneNumber) VALUES ('$username', '$email', '$password', '$phoneNumber')";
		$queryResult = mysqli_query($Connection, $query);
		if(queryResult) {
			echo "The submit is successfully submitted"; 
		} else {
			echo "Something is wrong while submitting";
		}
	}
 ?>