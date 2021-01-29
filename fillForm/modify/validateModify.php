<?php 
	include "../init/connDB.php";
	

	$query = "UPDATE users SET username='$username' phoneNumber='$phoneNumber' email='$email' WHERE id='$id'";
	$queryResult = mysqli_query($Connection, $query);

	if($queryResult) {
		echo "The user's data is updated";
	} else {
		echo "Oops! something is wrong while updating. Please try again!!!";
	}
 ?>